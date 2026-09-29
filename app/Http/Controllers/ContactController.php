<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Lead;
use App\Models\Client;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;

class ContactController extends Controller
{
    public function store(ContactRequest $request)
    {
        // Honeypot ya validado en ContactRequest (max:0), doble chequeo
        if ($request->filled('website') || $request->filled('_gotcha')) {
            return response()->json(['message' => 'Spam detectado.'], 422);
        }

        $data = $request->validated();

        // Rate limit extra por IP + email (throttle:3,60 en ruta + este)
        $key = 'contact:'. $request->ip() . ':' . $data['email'];
        if (RateLimiter::tooManyAttempts($key, 3)) {
            return response()->json(['message' => 'Demasiados envíos. Probá en unos minutos o escribí a karlosf@gmail.com'], 429);
        }
        RateLimiter::hit($key, 3600);

        // Guardar lead + cliente (preparado para gestión futura)
        $client = Client::firstOrCreate(
            ['email' => $data['email']],
            ['name' => $data['name'], 'status' => 'lead']
        );
        $lead = Lead::create([
            'client_id' => $client->id,
            'name' => $data['name'],
            'email' => $data['email'],
            'message' => $data['message'],
            'source' => 'web',
            'status' => 'new',
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        Mail::raw(
            "Nombre: {$data['name']}\nEmail: {$data['email']}\n\n{$data['message']}",
            function ($m) use ($data) {
                $m->to('karlosf@gmail.com')
                  ->subject('Nuevo contacto desde InnoDesign — ' . $data['name'])
                  ->replyTo($data['email'], $data['name']);
            }
        );

        return response()->json(['ok' => true, 'message' => 'Mensaje enviado.']);
    }
}

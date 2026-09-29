<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:2', 'max:100', 'regex:/^[\pL\s\-\'.]+$/u'],
            'email' => ['required', 'email:rfc,dns', 'max:150'],
            'message' => ['required', 'string', 'min:10', 'max:5000'],
            // Honeypot debe venir vacío
            'website' => ['nullable', 'max:0'],
            '_gotcha' => ['nullable', 'max:0'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Ingresá tu nombre.',
            'name.min' => 'El nombre debe tener al menos 2 caracteres.',
            'name.regex' => 'El nombre contiene caracteres no válidos.',
            'email.required' => 'Ingresá tu email.',
            'email.email' => 'Ingresá un email válido.',
            'message.required' => 'Contanos tu idea.',
            'message.min' => 'El mensaje debe tener al menos 10 caracteres.',
            'website.max' => 'Spam detectado.',
            '_gotcha.max' => 'Spam detectado.',
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'nombre',
            'email' => 'email',
            'message' => 'mensaje',
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'name' => trim((string) $this->input('name')),
            'email' => strtolower(trim((string) $this->input('email'))),
            'message' => trim((string) $this->input('message')),
        ]);
    }
}

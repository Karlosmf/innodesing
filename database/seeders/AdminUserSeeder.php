<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'karlosf@gmail.com'],
            [
                'name' => 'Carlos — InnoDesign Admin',
                'password' => Hash::make('AdminInnodesing2026!'), // cambialo en primer login
                'role' => 'admin',
                'email_verified_at' => now(),
            ]
        );
        $this->command->info('Admin: karlosf@gmail.com / AdminInnodesing2026! — cambialo al entrar');
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Oshaq',
            'email' => 'super_admin@gmail.com',
            'password' => Hash::make('#SAASLMSPROGRAM'),
            'role' => 'super_admin',
            'tenant_id' => null,
        ]);
    }
}

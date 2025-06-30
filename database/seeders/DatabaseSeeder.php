<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'otp' => '0',
            'name' => 'Admin',
            'email' => '19202103491@cse.bubt.edu.bd',
            'phone' => '0123456789',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
        ]);
       
    }
}

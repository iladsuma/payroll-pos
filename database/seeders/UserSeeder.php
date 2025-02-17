<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // Replace 'password' with your desired password
        ]);

        User::create([
            'name' => 'User1',
            'email' => 'user1@example.com',
            'password' => Hash::make('password'), // Replace 'password' with your desired password
        ]);

        User::create([
            'name' => 'User2',
            'email' => 'user2@example.com',
            'password' => Hash::make('password'), // Replace 'password' with your desired password
        ]);
    }
}

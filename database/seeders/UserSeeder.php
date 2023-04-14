<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Nicky Zahrani Monitaputri',
            'email' => 'niqizahrani@gmail.com',
            'password' => Hash::make('admin'),
            'level' => 'admin',
        ]);

        User::create([
            'name' => 'monita',
            'email' => 'monita@gmail.com',
            'password' => Hash::make('admin'),
            'level' => 'pengunjung',
        ]);
    }
}

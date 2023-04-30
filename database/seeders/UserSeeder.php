<?php

namespace Database\Seeders;

use App\Models\Driver;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin12345'),
        ]);

        Driver::create([
            'name' => 'driver11111',
            'email' => 'driver11111@gmail.com',
            'img' => 'user.png',
            'password' => Hash::make('driver11111'),
        ]);
        
    }
}
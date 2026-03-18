<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Muhammad Syauqi Murtadlo',
            'username' => 'syauqimurtadlo',
            'email' => 'sauki084@gmail.com',
            'password' => Hash::make('password123'),
        ]);

        User::factory(5)->create();
    }
}

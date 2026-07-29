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
            'name' => 'Admin',
            'email' => 'admin@konok.io',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        $this->call([
            PortfolioSeeder::class,
            ServiceSeeder::class,
            SkillSeeder::class,
        ]);
    }
}

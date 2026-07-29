<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create admin user
        User::create([
            'name' => 'Admin',
            'email' => 'admin@konok.io',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        $this->call([
            CompanyProfileSeeder::class,
            ServiceSeeder::class,
            PortfolioSeeder::class,
            TestimonialSeeder::class,
            FaqSeeder::class,
            SkillSeeder::class,
        ]);
    }
}

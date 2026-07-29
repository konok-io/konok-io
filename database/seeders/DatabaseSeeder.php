<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create permissions
        $permissions = [
            ['name' => 'view about', 'guard_name' => 'web'],
            ['name' => 'view services', 'guard_name' => 'web'],
            ['name' => 'view portfolio', 'guard_name' => 'web'],
            ['name' => 'view contact', 'guard_name' => 'web'],
            ['name' => 'send contact', 'guard_name' => 'web'],
        ];
        
        foreach ($permissions as $permission) {
            DB::table('permissions')->insert([
                'name' => $permission['name'],
                'guard_name' => $permission['guard_name'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        
        // Create admin role
        DB::table('roles')->insert([
            'name' => 'admin',
            'guard_name' => 'web',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        // Create user role
        DB::table('roles')->insert([
            'name' => 'user',
            'guard_name' => 'web',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Create admin user
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
            CompanyProfileSeeder::class,
        ]);
    }
}

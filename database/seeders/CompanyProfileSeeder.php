<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyProfileSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('company_profiles')->insert([
            'name' => 'KONOK',
            'tagline' => 'Key Of Next-generation Online Knowledge',
            'hero_title' => 'Muhammad Rashed Hossain',
            'hero_subtitle' => 'IT Support Specialist | Laravel Developer | Problem Solver',
            'about_text' => 'I am an experienced IT Support Specialist, Computer Operator, and AI-Assisted Laravel Web Developer currently based in Saudi Arabia. I am also the founder of KONOK (Key Of Next-generation Online Knowledge), leveraging advanced AI tools to accelerate code development and optimize system workflows.',
            'email' => 'konok.io.bd@gmail.com',
            'phone' => '+966 XX XXX XXXX',
            'address' => 'Riyadh',
            'city' => 'Riyadh',
            'country' => 'Saudi Arabia',
            'facebook' => 'https://facebook.com/mrh.it',
            'twitter' => 'https://twitter.com/mrh_it',
            'linkedin' => 'https://linkedin.com/in/mrh-it',
            'github' => 'https://github.com/konok-io',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\CompanyProfile;
use Illuminate\Database\Seeder;

class CompanyProfileSeeder extends Seeder
{
    public function run(): void
    {
        CompanyProfile::updateOrCreate(
            ['id' => 1],
            [
                'name' => 'KONOK.IO',
                'tagline' => 'Professional Web Development & IT Solutions',
                'hero_title' => 'KONOK.IO - Your Digital Partner',
                'hero_subtitle' => 'Transforming your ideas into powerful digital experiences. We help businesses grow with custom web applications, IT infrastructure, and digital solutions.',
                'about_title' => 'Your Trusted Technology Partner',
                'about_text' => 'KONOK.IO is a leading provider of professional web development and IT solutions. We specialize in building custom websites, web applications, and providing comprehensive IT support for businesses of all sizes. Our team of experts is dedicated to delivering high-quality solutions that drive growth and efficiency.',
                'mission' => 'To empower businesses with innovative digital solutions that enhance productivity, reduce costs, and accelerate growth through cutting-edge technology.',
                'vision' => 'To be the most trusted IT partner for businesses seeking digital transformation, known for excellence, reliability, and customer-centric approach.',
                'email' => 'hello@konok.io',
                'phone' => '+880 1700 000000',
                'address' => 'Gulshan, Dhaka',
                'city' => 'Dhaka',
                'country' => 'Bangladesh',
                'facebook' => 'https://facebook.com/konokio',
                'twitter' => 'https://twitter.com/konokio',
                'linkedin' => 'https://linkedin.com/company/konokio',
                'github' => 'https://github.com/konok-io',
                'whatsapp' => '+880 1700 000000',
                'working_hours' => 'Sat - Thu: 9:00 AM - 6:00 PM',
            ]
        );
    }
}

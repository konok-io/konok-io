<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            ['name' => 'Laravel', 'category' => 'backend', 'level' => 'expert', 'percentage' => 95],
            ['name' => 'PHP', 'category' => 'backend', 'level' => 'expert', 'percentage' => 90],
            ['name' => 'MySQL', 'category' => 'backend', 'level' => 'advanced', 'percentage' => 85],
            ['name' => 'HTML/CSS', 'category' => 'frontend', 'level' => 'expert', 'percentage' => 90],
            ['name' => 'JavaScript', 'category' => 'frontend', 'level' => 'advanced', 'percentage' => 80],
            ['name' => 'Git', 'category' => 'tools', 'level' => 'advanced', 'percentage' => 85],
            ['name' => 'Linux', 'category' => 'tools', 'level' => 'advanced', 'percentage' => 80],
            ['name' => 'Networking', 'category' => 'it', 'level' => 'advanced', 'percentage' => 85],
        ];

        foreach ($skills as $skill) {
            Skill::create([
                'name' => $skill['name'],
                'slug' => Str::slug($skill['name']),
                'category' => $skill['category'],
                'level' => $skill['level'],
                'percentage' => $skill['percentage'],
            ]);
        }
    }
}

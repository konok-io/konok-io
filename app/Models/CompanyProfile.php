<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'tagline',
        'hero_title',
        'hero_subtitle',
        'about_title',
        'about_text',
        'mission',
        'vision',
        'email',
        'phone',
        'address',
        'city',
        'country',
        'facebook',
        'twitter',
        'linkedin',
        'github',
        'whatsapp',
        'working_hours',
    ];

    public static function getSettings()
    {
        return self::first() ?? new self();
    }
}

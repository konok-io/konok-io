<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'icon', 'description', 'content', 'features', 'technologies', 'price', 'status', 'sort_order',
    ];

    protected $casts = [
        'features' => 'array', 'technologies' => 'array',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }
}

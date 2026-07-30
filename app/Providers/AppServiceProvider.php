<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Setting;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Share settings with all views
        try {
            $settings = Setting::pluck('value', 'key')->toArray();
            
            // Add full URL for logo - use direct storage path
            if (isset($settings['logo_image']) && $settings['logo_image']) {
                // Check if it's already a full URL
                if (str_starts_with($settings['logo_image'], 'http')) {
                    $settings['logo_image_url'] = $settings['logo_image'];
                } else {
                    $settings['logo_image_url'] = '/storage/' . $settings['logo_image'];
                }
            }
            
            View::share('siteSettings', $settings);
        } catch (\Exception $e) {
            View::share('siteSettings', []);
        }
    }
}

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
            // Add full URL for logo
            if (isset($settings['logo_image']) && $settings['logo_image']) {
                $settings['logo_image_url'] = Storage::url($settings['logo_image']);
            }
            View::share('siteSettings', $settings);
        } catch (\Exception $e) {
            View::share('siteSettings', []);
        }
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    public function index()
    {
        try {
            $settings = Setting::pluck('value', 'key')->toArray();
            \Log::info('Settings loaded: ' . json_encode($settings));
        } catch (\Exception $e) {
            $settings = [];
            \Log::error('Settings load failed: ' . $e->getMessage());
        }
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        // Validation rules
        $rules = [
            'site_logo' => 'nullable|string|max:100',
            'header_title' => 'nullable|string|max:255',
            'header_subtitle' => 'nullable|string|max:255',
            'footer_copyright' => 'nullable|string|max:255',
            'footer_description' => 'nullable|string|max:500',
            'menu_item_1' => 'nullable|string|max:100',
            'menu_item_2' => 'nullable|string|max:100',
            'menu_item_3' => 'nullable|string|max:100',
            'menu_item_4' => 'nullable|string|max:100',
            'menu_item_5' => 'nullable|string|max:100',
            'site_name' => 'nullable|string|max:255',
            'site_tagline' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:50',
            'address' => 'nullable|string|max:500',
            'city' => 'nullable|string|max:100',
            'country' => 'nullable|string|max:100',
            'google_map_embed' => 'nullable|string',
            'facebook' => 'nullable|url|max:255',
            'twitter' => 'nullable|url|max:255',
            'linkedin' => 'nullable|url|max:255',
            'github' => 'nullable|url|max:255',
            'instagram' => 'nullable|url|max:255',
            'youtube' => 'nullable|url|max:255',
            'whatsapp' => 'nullable|string|max:50',
            'whatsapp_message' => 'nullable|string|max:255',
            'hero_title' => 'nullable|string|max:255',
            'hero_subtitle' => 'nullable|string|max:255',
            'hero_button_text' => 'nullable|string|max:100',
            'about_title' => 'nullable|string|max:255',
            'about_description' => 'nullable|string',
            'services_title' => 'nullable|string|max:255',
            'services_subtitle' => 'nullable|string|max:255',
            'contact_title' => 'nullable|string|max:255',
            'contact_subtitle' => 'nullable|string|max:255',
        ];

        if ($request->hasFile('logo_image')) {
            $rules['logo_image'] = 'image|mimes:png,jpg,jpeg,svg|max:2048';
        }

        $validated = $request->validate($rules);

        // Handle logo image upload
        if ($request->hasFile('logo_image')) {
            try {
                \Log::info('Logo upload started');
                
                // Delete old logo if exists
                $oldLogo = Setting::where('key', 'logo_image')->first();
                if ($oldLogo && $oldLogo->value) {
                    \Log::info('Deleting old logo: ' . $oldLogo->value);
                    \Storage::disk('public')->delete($oldLogo->value);
                }

                // Store new logo
                $file = $request->file('logo_image');
                $filename = time() . '_' . $file->getClientOriginalName();
                \Log::info('Storing logo as: ' . $filename);
                
                $logoPath = $file->storeAs('logos', $filename, 'public');
                \Log::info('Logo stored at: ' . $logoPath);
                
                // Force save to database
                Setting::updateOrCreate(
                    ['key' => 'logo_image'],
                    ['value' => $logoPath]
                );
                \Log::info('Logo saved to database');
                
            } catch (\Exception $e) {
                \Log::error('Logo upload failed: ' . $e->getMessage() . ' - ' . $e->getTraceAsString());
                return redirect()->back()
                    ->withInput()
                    ->withErrors(['logo_image' => 'Logo upload failed: ' . $e->getMessage()]);
            }
        }

        // Save other settings
        $fields = [
            // General
            'site_name', 'site_tagline', 'email', 'phone',
            // Header
            'site_logo', 'header_title', 'header_subtitle',
            // Footer
            'footer_copyright', 'footer_description',
            // Contact
            'address', 'city', 'country', 'google_map_embed',
            // Social Media
            'facebook', 'twitter', 'linkedin', 'github',
            'instagram', 'youtube', 'whatsapp', 'whatsapp_message',
            // Menu
            'menu_item_1', 'menu_item_2', 'menu_item_3', 'menu_item_4', 'menu_item_5',
            // Content - Hero
            'hero_title', 'hero_subtitle', 'hero_button_text',
            // Content - About
            'about_title', 'about_description',
            // Content - Services
            'services_title', 'services_subtitle',
            // Content - Contact
            'contact_title', 'contact_subtitle',
        ];

        foreach ($fields as $field) {
            if ($request->has($field)) {
                Setting::updateOrCreate(
                    ['key' => $field],
                    ['value' => $request->$field]
                );
            }
        }

        // Get current tab from request or default to general
        $currentTab = $request->input('current_tab', 'general');
        
        // Redirect back with hash using session flash data
        return redirect()->route('admin.settings')->with([
            'success' => 'Settings updated successfully!',
            'active_tab' => $currentTab
        ]);
    }

    public function pages()
    {
        return view('admin.settings.pages');
    }
}

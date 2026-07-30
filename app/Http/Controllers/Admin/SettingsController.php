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
        } catch (\Exception $e) {
            $settings = [];
        }
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'site_logo' => 'required|string|max:100',
            'header_title' => 'required|string|max:255',
            'header_subtitle' => 'required|string|max:255',
            'footer_copyright' => 'required|string|max:255',
            'footer_description' => 'required|string|max:500',
            'menu_item_1' => 'required|string|max:100',
            'menu_item_2' => 'required|string|max:100',
            'menu_item_3' => 'required|string|max:100',
            'menu_item_4' => 'required|string|max:100',
            'menu_item_5' => 'required|string|max:100',
            'logo_image' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048',
        ]);

        try {
            // Handle logo image upload
            if ($request->hasFile('logo_image')) {
                // Delete old logo if exists
                $oldLogo = Setting::where('key', 'logo_image')->first();
                if ($oldLogo && $oldLogo->value) {
                    Storage::disk('public')->delete($oldLogo->value);
                }
                
                // Store new logo
                $logoPath = $request->file('logo_image')->store('logos', 'public');
                Setting::updateOrCreate(
                    ['key' => 'logo_image'],
                    ['value' => $logoPath]
                );
            }

            $fields = [
                'site_logo', 'header_title', 'header_subtitle',
                'footer_copyright', 'footer_description',
                'menu_item_1', 'menu_item_2', 'menu_item_3', 'menu_item_4', 'menu_item_5',
            ];

            foreach ($fields as $field) {
                Setting::updateOrCreate(
                    ['key' => $field],
                    ['value' => $request->$field]
                );
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Please run migrations first: php artisan migrate');
        }

        return redirect()->back()->with('success', 'Settings updated successfully!');
    }

    public function pages()
    {
        return view('admin.settings.pages');
    }
}

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Terminal / Code Style Theme Routes
| konok-io Portfolio Website
|
*/

// Make layout available
View::composer('layouts.app', function ($view) {
    $view->with('currentRoute', Route::currentRouteName());
});

// Home Page
Route::get('/', function () {
    return view('pages.welcome');
})->name('home');

// About Page
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

// Services Page
Route::get('/services', function () {
    return view('pages.services');
})->name('services');

// Portfolio Page
Route::get('/portfolio', function () {
    return view('pages.portfolio');
})->name('portfolio');

// Contact Page
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// Contact Form Submission (placeholder)
Route::post('/contact', function (\Illuminate\Http\Request $request) {
    // Validate the request
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'subject' => 'nullable|string|max:255',
        'message' => 'required|string|max:5000',
    ]);
    
    // Here you would typically:
    // 1. Send an email
    // 2. Store in database
    // 3. Notify via Slack/Discord
    
    // For now, return success response
    return response()->json([
        'success' => true,
        'message' => 'Your message has been sent successfully!'
    ]);
})->name('contact.store');

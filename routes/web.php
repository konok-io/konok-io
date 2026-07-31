<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Terminal / Code Style Theme Routes
| konok-io Portfolio Website
|
*/

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/services/{slug}', [HomeController::class, 'service'])->name('service');
Route::get('/projects', [HomeController::class, 'portfolio'])->name('projects');
Route::get('/projects/{slug}', [HomeController::class, 'portfolioShow'])->name('projects.show');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [HomeController::class, 'contactStore'])->name('contact.store');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
    Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
    
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('projects', App\Http\Controllers\Admin\PortfolioController::class);
    Route::resource('services', App\Http\Controllers\Admin\ServiceController::class);
    Route::get('contacts', [App\Http\Controllers\Admin\ContactController::class, 'index'])->name('contacts.index');
    Route::get('contacts/{contact}', [App\Http\Controllers\Admin\ContactController::class, 'show'])->name('contacts.show');
    Route::post('contacts/{contact}/read', [App\Http\Controllers\Admin\ContactController::class, 'markAsRead'])->name('contacts.read');
    Route::delete('contacts/{contact}', [App\Http\Controllers\Admin\ContactController::class, 'destroy'])->name('contacts.destroy');
    Route::resource('skills', App\Http\Controllers\Admin\SkillController::class);
    
    // Settings - Each tab is a separate route
    Route::get('settings', [App\Http\Controllers\Admin\SettingsController::class, 'index'])->name('settings');
    Route::get('settings/{tab}', [App\Http\Controllers\Admin\SettingsController::class, 'index'])->name('settings.tab');
    Route::post('settings/{tab}', [App\Http\Controllers\Admin\SettingsController::class, 'update'])->name('settings.update');
    Route::get('settings/pages', [App\Http\Controllers\Admin\SettingsController::class, 'pages'])->name('settings.pages');
});




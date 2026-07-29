<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('company_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('Wave Development & IT');
            $table->string('tagline')->default('Building powerful digital experiences');
            $table->string('hero_title')->nullable();
            $table->text('hero_subtitle')->nullable();
            $table->string('about_title')->nullable();
            $table->text('about_text')->nullable();
            $table->text('mission')->nullable();
            $table->text('vision')->nullable();
            $table->string('email')->default('hello@wavedevelopment.io');
            $table->string('phone')->default('+880 1700 000000');
            $table->string('address')->nullable();
            $table->string('city')->default('Dhaka');
            $table->string('country')->default('Bangladesh');
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('github')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('working_hours')->default('Sat - Thu: 9:00 AM - 6:00 PM');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('company_profiles');
    }
};

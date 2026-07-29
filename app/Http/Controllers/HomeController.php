<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredPortfolios = Portfolio::published()->featured()->orderBy('sort_order')->limit(6)->get();
        $services = Service::active()->orderBy('sort_order')->get();
        $skills = Skill::active()->orderBy('sort_order')->get()->groupBy('category');
        $testimonials = Testimonial::active()->orderBy('sort_order')->limit(3)->get();

        return view('pages.welcome', compact('featuredPortfolios', 'services', 'skills', 'testimonials'));
    }

    public function about()
    {
        $skills = Skill::active()->orderBy('sort_order')->get()->groupBy('category');
        return view('pages.about', compact('skills'));
    }

    public function services()
    {
        $services = Service::active()->orderBy('sort_order')->get();
        return view('pages.services', compact('services'));
    }

    public function service($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        return view('pages.service-detail', compact('service'));
    }

    public function portfolio()
    {
        $portfolios = Portfolio::published()->orderBy('sort_order')->get()->groupBy('category');
        return view('pages.portfolio', compact('portfolios'));
    }

    public function portfolioShow($slug)
    {
        $portfolio = Portfolio::where('slug', $slug)->firstOrFail();
        return view('pages.portfolio-detail', compact('portfolio'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function contactStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|max:5000',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
        ]);

        Contact::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'] ?? 'No Subject',
            'message' => $validated['message'],
            'phone' => $validated['phone'] ?? null,
            'company' => $validated['company'] ?? null,
            'status' => 'new',
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Your message has been sent successfully!',
        ]);
    }
}

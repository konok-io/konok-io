<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::orderBy('sort_order')->get();
        return view('admin.portfolios.index', compact('portfolios'));
    }

    public function create()
    {
        return view('admin.portfolios.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'content' => 'nullable|string',
            'category' => 'required|string|max:100',
            'tags' => 'nullable|array',
            'technologies' => 'nullable|array',
            'image' => 'nullable|string|max:255',
            'client' => 'nullable|string|max:255',
            'url' => 'nullable|string|max:255',
            'github_url' => 'nullable|string|max:255',
            'status' => 'required|in:draft,published',
            'featured' => 'nullable|boolean',
            'sort_order' => 'nullable|integer',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['featured'] = $request->has('featured');

        Portfolio::create($validated);

        return redirect()->route('admin.projects.index')->with('success', 'Portfolio created successfully!');
    }

    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolios.edit', compact('portfolio'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'content' => 'nullable|string',
            'category' => 'required|string|max:100',
            'tags' => 'nullable|array',
            'technologies' => 'nullable|array',
            'image' => 'nullable|string|max:255',
            'client' => 'nullable|string|max:255',
            'url' => 'nullable|string|max:255',
            'github_url' => 'nullable|string|max:255',
            'status' => 'required|in:draft,published',
            'featured' => 'nullable|boolean',
            'sort_order' => 'nullable|integer',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['featured'] = $request->has('featured');

        $portfolio->update($validated);

        return redirect()->route('admin.projects.index')->with('success', 'Portfolio updated successfully!');
    }

    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return redirect()->route('admin.projects.index')->with('success', 'Portfolio deleted successfully!');
    }
}

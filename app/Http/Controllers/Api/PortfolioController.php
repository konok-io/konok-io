<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::published()->orderBy('sort_order')->get();
        return response()->json(['success' => true, 'data' => $portfolios]);
    }

    public function show($slug)
    {
        $portfolio = Portfolio::where('slug', $slug)->firstOrFail();
        return response()->json(['success' => true, 'data' => $portfolio]);
    }
}

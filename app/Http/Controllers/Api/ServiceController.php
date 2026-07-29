<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::active()->orderBy('sort_order')->get();
        return response()->json(['success' => true, 'data' => $services]);
    }

    public function show($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        return response()->json(['success' => true, 'data' => $service]);
    }
}

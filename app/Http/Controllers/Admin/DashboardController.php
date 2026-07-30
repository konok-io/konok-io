<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_portfolios' => Portfolio::count(),
            'published_portfolios' => Portfolio::where('status', 'published')->count(),
            'total_services' => Service::count(),
            'unread_contacts' => Contact::unread()->count(),
            'total_contacts' => Contact::count(),
        ];

        $recentContacts = Contact::orderBy('created_at', 'desc')->limit(5)->get();
        $recentPortfolios = Portfolio::orderBy('created_at', 'desc')->limit(5)->get();
        $unreadCount = Contact::unread()->count();

        return view('admin.dashboard-minimal', compact('stats', 'recentContacts', 'recentPortfolios', 'unreadCount'));
    }
}

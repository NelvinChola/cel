<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Client;
use App\Models\Category;
use App\Models\TeamMember;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        // Total counts
        $totalProducts = Product::count();
        $totalClients = Client::count();
        $totalCategories = Category::count();
        $totalTeamMembers = TeamMember::count(); // adjust if you have roles

        // Recent Products
        $recentProducts = Product::with(['client', 'category'])
                                ->orderBy('created_at', 'desc')
                                ->take(5)
                                ->get();

        // Products grouped by category
        $productsByCategory = Category::withCount('products')->get();

        // Assign random colors for the chart (optional)
        $productsByCategory->map(function($category) {
            $category->chart_color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
            return $category;
        });

        return view('admin.dashboard', compact(
            'totalProducts', 
            'totalClients', 
            'totalCategories', 
            'totalTeamMembers', 
            'recentProducts', 
            'productsByCategory'
        ));
    }
}

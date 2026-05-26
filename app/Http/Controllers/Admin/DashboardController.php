<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProducts  = Product::count();
        $totalCategories = Category::count();
        $featuredProducts = Product::where('is_featured', true)->count();
        $recentProducts = Product::with('category')->latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalProducts',
            'totalCategories',
            'featuredProducts',
            'recentProducts'
        ));
    }
}

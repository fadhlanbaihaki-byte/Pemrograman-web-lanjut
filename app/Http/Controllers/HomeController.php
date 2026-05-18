<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Setting;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProducts = Product::with('category')
            ->limit(3)
            ->get();

        $settings = Setting::pluck('setting_value', 'setting_key');

        return view('home', compact('featuredProducts', 'settings'));
    }
}
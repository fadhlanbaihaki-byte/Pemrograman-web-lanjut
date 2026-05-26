<?php

namespace App\Http\Controllers;

use App\Models\Setting;

class AboutController extends Controller
{
    public function index()
    {
        $settings = Setting::pluck('setting_value', 'setting_key');

        return view('pages.tentang', compact('settings'));
    }
}
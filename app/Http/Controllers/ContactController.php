<?php

namespace App\Http\Controllers;

use App\Models\Setting;

class ContactController extends Controller
{
    public function index()
    {
        $settings = Setting::pluck('setting_value', 'setting_key');

        $whatsappNumber = $settings['whatsapp_number'] ?? '';

        $message = urlencode('Halo Indo Gummi, saya ingin bertanya tentang produk karet industri.');

        $whatsappLink = 'https://wa.me/' . $whatsappNumber . '?text=' . $message;

        return view('contact', compact('settings', 'whatsappLink'));
    }
}
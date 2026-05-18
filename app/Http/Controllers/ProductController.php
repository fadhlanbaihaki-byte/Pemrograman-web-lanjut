<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();

        $products = Product::with('category')
            ->when($request->search, function ($query, $search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('description', 'like', '%' . $search . '%');
            })
            ->when($request->category_id, function ($query, $categoryId) {
                $query->where('category_id', $categoryId);
            })
            ->paginate(6)
            ->withQueryString();

        return view('products.index', compact('products', 'categories'));
    }

    public function show($slug)
    {
        $product = Product::with('category')
            ->where('slug', $slug)
            ->firstOrFail();

        $whatsappNumber = Setting::where('setting_key', 'whatsapp_number')
            ->value('setting_value');

        $message = urlencode(
            'Halo Indo Gummi, saya ingin bertanya tentang produk ' . $product->name
        );

        $whatsappLink = 'https://wa.me/' . $whatsappNumber . '?text=' . $message;

        return view('products.show', compact('product', 'whatsappLink'));
    }
}
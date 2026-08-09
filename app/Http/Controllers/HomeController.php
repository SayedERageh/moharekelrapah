<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::latest()->take(6)->get();

        $categories = ProductCategory::where('is_active', true)
            ->with([
                'subcategories' => function ($query) {
                    $query->where('is_active', true)
                        ->orderBy('sort_order');
                }
            ])
            ->orderBy('sort_order')
            ->get();

        $products = Product::where('is_active', true)
            ->where('is_featured', true)
            ->with([
                'store',
                'subcategory.productCategory'
            ])
            ->orderBy('sort_order')
            ->latest()
            ->take(8)
            ->get();

        return view('pages.home', compact(
            'services',
            'categories',
            'products'
        ));
    }
}
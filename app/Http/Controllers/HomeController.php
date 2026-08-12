<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Service;
use App\Models\Store;

class HomeController 
{
    public function index()
    {
        /*
        |--------------------------------------------------------------------------
        | الخدمات
        |--------------------------------------------------------------------------
        */

        $services = Service::latest()
            ->take(6)
            ->get();


        /*
        |--------------------------------------------------------------------------
        | الأقسام
        |--------------------------------------------------------------------------
        */

        $categories = ProductCategory::where('is_active', true)
            ->with([
                'subcategories' => function ($query) {
                    $query
                        ->where('is_active', true)
                        ->orderBy('sort_order');
                }
            ])
            ->orderBy('sort_order')
            ->get();


        /*
        |--------------------------------------------------------------------------
        | المنتجات المميزة
        |--------------------------------------------------------------------------
        */

        $featuredProducts = Product::where('is_active', true)
            ->where('is_featured', true)
            ->with([
                'store',
                'subcategory.productCategory'
            ])
            ->orderBy('sort_order')
            ->latest()
            ->take(8)
            ->get();


        /*
        |--------------------------------------------------------------------------
        | أحدث المنتجات
        |--------------------------------------------------------------------------
        */

        $latestProducts = Product::where('is_active', true)
            ->with([
                'store',
                'subcategory.productCategory'
            ])
            ->latest()
            ->take(8)
            ->get();


        /*
        |--------------------------------------------------------------------------
        | أفضل العروض
        |--------------------------------------------------------------------------
        */

        $offerProducts = Product::where('is_active', true)
            ->whereNotNull('old_price')
            ->whereColumn('old_price', '>', 'price')
            ->with([
                'store',
                'subcategory.productCategory'
            ])
            ->orderByRaw('(old_price - price) / old_price DESC')
            ->take(8)
            ->get();


        /*
        |--------------------------------------------------------------------------
        | المتاجر
        |--------------------------------------------------------------------------
        */

        $stores = Store::where('is_active', true)
            ->orderBy('name')
            ->get();


        return view('pages.home', compact(
            'services',
            'categories',
            'featuredProducts',
            'latestProducts',
            'offerProducts',
            'stores'
        ));
    }
}
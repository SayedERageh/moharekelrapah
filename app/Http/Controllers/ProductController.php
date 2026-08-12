<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Subcategory;
use App\Models\Store;
use Illuminate\Http\Request;

class ProductController 
{
    /**
     * جميع المنتجات
     */
    public function index(Request $request)
    {
        $categories = ProductCategory::where('is_active', true)
            ->with('subcategories')
            ->orderBy('sort_order')
            ->get();

        $stores = Store::where('is_active', true)
            ->orderBy('name')
            ->get();

        $query = Product::where('is_active', true)
            ->with([
                'store',
                'subcategory.productCategory'
            ]);

        /*
        |--------------------------------------------------------------------------
        | البحث
        |--------------------------------------------------------------------------
        */

        if ($request->filled('search')) {
            $search = $request->search;

            $query->where('name', 'like', "%{$search}%");
        }

        /*
        |--------------------------------------------------------------------------
        | فلترة المتجر
        |--------------------------------------------------------------------------
        */

        if ($request->filled('store')) {
            $query->where('store_id', $request->store);
        }

        /*
        |--------------------------------------------------------------------------
        | فلترة المنتجات المميزة
        |--------------------------------------------------------------------------
        */

        if ($request->boolean('featured')) {
            $query->where('is_featured', true);
        }

        /*
        |--------------------------------------------------------------------------
        | فلترة السعر
        |--------------------------------------------------------------------------
        */

        if ($request->filled('min_price')) {
            $query->where(
                'price',
                '>=',
                $request->min_price
            );
        }

        if ($request->filled('max_price')) {
            $query->where(
                'price',
                '<=',
                $request->max_price
            );
        }

    /*
|--------------------------------------------------------------------------
| الترتيب
|--------------------------------------------------------------------------
*/

$sort = $request->get('sort', 'latest');

switch ($sort) {

    case 'price_low':

        $query->orderBy('price', 'asc');

        break;


    case 'price_high':

        $query->orderBy('price', 'desc');

        break;


    case 'featured':

        $query
            ->orderByDesc('is_featured')
            ->orderBy('price', 'asc');

        break;


    case 'latest':

    default:

        $query->latest();

        break;
}
        /*
        |--------------------------------------------------------------------------
        | Pagination
        |--------------------------------------------------------------------------
        */

        $products = $query
            ->paginate(12)
            ->withQueryString();

        return view('products.index', compact(
            'categories',
            'stores',
            'products'
        ));
    }


    /**
     * منتجات القسم
     */
  public function category($slug)
{
    $category = ProductCategory::where('slug', $slug)
        ->where('is_active', true)
        ->with([
            'subcategories' => function ($query) {
                $query->where('is_active', true)
                    ->orderBy('sort_order');
            }
        ])
        ->firstOrFail();

    // الفروع التابعة للقسم
    $subcategories = $category->subcategories;

    $products = Product::where('is_active', true)
        ->whereHas('subcategory', function ($query) use ($category) {
            $query->where('product_category_id', $category->id);
        })
        ->with([
            'store',
            'subcategory'
        ])
        ->orderBy('price', 'asc')
        ->paginate(12)
        ->withQueryString();

    return view('products.category', compact(
        'category',
        'subcategories',
        'products'
    ));
}

    /**
     * منتجات الفرع
     */
  /**
 * منتجات الفرع
 */
public function subcategory($slug)
{
    // جلب الفرع
    $subcategory = Subcategory::where('slug', $slug)
        ->where('is_active', true)
        ->with('productCategory')
        ->firstOrFail();

    // القسم الرئيسي التابع له الفرع
    $category = $subcategory->productCategory;

    // جميع الفروع التابعة للقسم
    $subcategories = $category->subcategories()
        ->where('is_active', true)
        ->orderBy('sort_order')
        ->get();

    // منتجات هذا الفرع فقط
    $products = Product::where('is_active', true)
        ->where('subcategory_id', $subcategory->id)
        ->with([
            'store',
            'subcategory.productCategory'
        ])
        ->orderBy('price', 'asc')
        ->paginate(12)
        ->withQueryString();

    return view('products.category', compact(
        'category',
        'subcategory',
        'subcategories',
        'products'
    ));
}


    /**
     * تفاصيل المنتج
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)
            ->where('is_active', true)
            ->with([
                'store',
                'subcategory.productCategory'
            ])
            ->firstOrFail();

        /*
        |--------------------------------------------------------------------------
        | المنتجات المشابهة
        |--------------------------------------------------------------------------
        */

        $relatedProducts = Product::where('is_active', true)
            ->where('subcategory_id', $product->subcategory_id)
            ->where('id', '!=', $product->id)
            ->with('store')
            ->orderBy('price', 'asc')
            ->take(4)
            ->get();

        return view('products.show', compact(
            'product',
            'relatedProducts'
        ));
    }
}

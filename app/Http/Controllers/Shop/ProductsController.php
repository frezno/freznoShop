<?php
namespace App\Http\Controllers\Shop;

use App\Models\Category;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    /**
     * Get all products of the desired category.
     *
     * @param  string $slug  slug of products category
     * @return \Illuminate\View\View
     */
    public function getProductsByCategorySlug($slug)
    {
        $cat = Category::where('slug', '=', $slug)->get();

        return view('shop.products', compact('cat'));
    }
}

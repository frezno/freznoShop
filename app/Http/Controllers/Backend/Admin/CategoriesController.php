<?php
namespace App\Http\Controllers\Backend\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index()
    {
        $top_cat = Category::where('parent_id', '===', 0)->get();
        $parent_cat = Category::where('parent_id', 1)->get();
        
        return view('backend.admin.categories.categories', compact('top_cat', 'parent_cat'));
    }
}

<?php
namespace App\Backend\Admin\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index()
    {
        $top_cat = Category::where('parent_id', '===', 0)->get();
        $parent_cat = Category::where('parent_id', 1)->get();

        return view('backend.admin.categories.index', compact('top_cat', 'parent_cat'));
    }

    /**
     * Store the newly created category to the database.
     * 
     * @return \IlluminateHttp\Response
     */
    public function store()
    {
        //-- Bear in Mind:
        //-- NO validation yet!!!

        //-- If Parent Category has not been selected
        //-- and there is a Category Group value
        //-- we will have a new Parent (which always is 1).
        $parent_id = ((request('parent') == 0) && (request('top_cat') > 0)) ? 1 : request('parent');
        
        //-- Checking checkbox value.
        $is_active = request('is_active') ? 1 : 0;

        Category::create([
            'c_group' => request('top_cat'),
            'parent_id' => $parent_id,
            'name' => request('category'),
            'slug' => str_slug(request('category', '-')),
            'sortorder' => request('sortorder'),
            'active' => $is_active
        ]);
        
        return redirect('admin/categories');
    }
}

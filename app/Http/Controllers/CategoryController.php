<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $Category = Category::all();

        $category_arr = compact('Category');

        return view('/admin/category')->with($category_arr);
    }

  
  

    public function ViewaddCategory(Request $request)
    {
        return view('/admin/add-category');
    }

    public function addCategory(Request $request)
    {
        $Category = new Category();

        $Category->category_name = $request->category;
        $Category->post = "1";


        $Category->save();
        return redirect('/admin/category');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    { 
        // echo "<pre>";
        // print_r($request['search']);
        
       

        $PostData = Post::getPostData();

        return view('admin/post',['allPost' => $PostData]);

    }

    //    function for view add post 

    public function ViewaddPost()
    {
       $Category  = category::getCategoriesName();
      return view('admin/add-post',['CategoryName'=>$Category]);
        
    }
    // funciton for adding post 

    public function addPost(Request $request)
    {
        $request->validate([
            "post_title" => "required|max:300",
            "postdesc" => "required",
            "category" => "required",
            "fileToUpload" => "required|mimes:jpg,wegp,png,xls,pdf"
        ]);

        $post = new post();

        $post->title = $request->post_title;
        $post->description = $request->postdesc;
        $post->category = $request->category;
        $post->post_date = date('d-m-y');
        $post->author = 1;
        $post->post_image = $request->file('fileToUpload')->store('public/upload');

        $post->save();

        return redirect('admin/post');
    }
}

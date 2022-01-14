<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    use HasFactory;
    static function getPostData()

    {

        $details = DB::table('posts')->join('categories' , "category","category_id")->get();
        
        echo "<pre>";
        print_r($details);
        return $details;
    }
}

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
        $PostData = DB::table('posts')->select('posts.*', 'categories.category_name', 'users.username')
        ->leftJoin('categories', 'categories.category_id' ,'=', 'posts.category')->leftJoin('users', 'users.user_id','=','posts.author')->get();

        return $PostData;
    }
}

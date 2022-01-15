<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    use HasFactory;
    static function getPostData($id)

    {
        // insert 

        // $details = DB::table('posts')->insertGetId(['title' => 'today_task', 'description' => 'today_description', 'category' => '1', 'author' => '1']);

        // insertGetId funciton 

        // $details = DB::table('posts')->insertGetId(['title' => 'today_task', 'description' => 'today_description', 'category' => '1', 'author' => '1']);

        // where and or where 
        // $details = DB::table('posts')->where("category",2)->orwhere("post_id",8)->get();

        // where beetween and where not between 
        // $details = DB::table('posts')->whereBetween('post_id', [7,8])->get();
     
        $details = DB::table('posts');

        $sql = $details->select('post_id', 'title', 'category', 'description')->where('description', 'suthar')
           ->where(function($query){

               $query->where('category',1);

           })->get();


        return $sql;
       
       
        // echo "<pre>";
        // print_r($details);
    }
}

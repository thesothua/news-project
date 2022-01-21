<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    use HasFactory;
    static function getPostData($searchvalue)
    {
        if ($searchvalue != null) {
            $idSearch = ltrim($searchvalue, "A0");

            $PostData = DB::table('posts')->select('posts.*', 'categories.category_name', 'users.username')
                ->leftJoin('categories', 'categories.category_id', '=', 'posts.category')->leftJoin('users', 'users.user_id', '=', 'posts.author')->Where(function ($query) use ($idSearch , $searchvalue) {
                    $query->where('posts.title', 'LIKE', "%{$searchvalue}%")
                        ->orWhere('posts.post_id', 'LIKE', "%{$idSearch}%");
                })->get();

            foreach ($PostData->all() as $key => $value) {

              

                $sprintstr = "A" . sprintf('%05d', $value->post_id);
       
                
               if(stripos($sprintstr, $searchvalue) !== FALSE){
                   return $PostData;
               

               }elseif(stripos($value->title , $searchvalue) !== FALSE){
                  
               
                $titleSearch = DB::table('posts')->select('posts.*', 'categories.category_name', 'users.username')
                ->leftJoin('categories', 'categories.category_id', '=', 'posts.category')->leftJoin('users', 'users.user_id', '=', 'posts.author')->Where(function ($query) use ($searchvalue) {
                    $query->where('posts.title', 'LIKE', "%{$searchvalue}%");
                        
                })->get();

                return $titleSearch;
               
               } 

      
        }
         
        } else {

            $PostData = DB::table('posts')->select('posts.*', 'categories.category_name', 'users.username')
                ->leftJoin('categories', 'categories.category_id', '=', 'posts.category')->leftJoin('users', 'users.user_id', '=', 'posts.author')->get();
                return $PostData;
        }
        // dd($PostData->all());

    }
}

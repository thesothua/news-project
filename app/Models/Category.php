<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

  static function getCategoriesName()
    {
        $category_name = DB::table('categories')->select('category_id','category_name')->get();

       return $category_name;

    }
}

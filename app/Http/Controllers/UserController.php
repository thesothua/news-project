<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
 public function index()
 {
     $Users = User::all();
     
     $user_arr = compact('Users');
     return view('/admin/users')->with($user_arr);
 }



 public function ViewaddUser()
 {
     return view('admin/add-user');
 }

 public function addUser(Request $request)
 {
    

    //  laravel form validate fucntion; 
    $request->validate([
        "fname" => "required|max:15",
        "lname" => "required|max:15",
        "email" => "required|email",
        "user" => "required|max:30",
        "password" => "required|min:4|max:8",
        "role" => "required"
    ]);

    $User = new User();

    $User->fname = $request->fname;
    $User->lname = $request->lname;
    $User->username = $request->user;
    $User->email = $request->email;
    $User->password = $request->password;
    $User->role = $request->role;

    $User->save();
    return redirect('/admin/users');
     
 }
}

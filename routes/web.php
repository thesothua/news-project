<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// ===================================================
// user route 


// Route::get('/', function () {
//     return view('frontend/welcome');
// });
Route::get('/category', function () {
    return view('frontend/category');
});

// ==================================================
// admin route 


Route::get('/', function () {
    return view('admin/index');
});
Route::get('/post', function () {
    return view('admin/post');
});
Route::get('/add-post', function () {
    return view('admin/add-post');
});
Route::get('/add-category', function () {
    return view('admin/add-category');
});
Route::get('/category', function () {
    return view('admin/category');
});
Route::get('/update-category', function () {
    return view('admin/update-category');
});
Route::get('/update-post', function () {
    return view('admin/update-post');
});
Route::get('/users', function () {
    return view('admin/users');
});
Route::get('/add-user', function () {
    return view('admin/add-user');
});
Route::get('/update-user', function () {
    return view('admin/update-user');
});

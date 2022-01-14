<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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


Route::get('/', [UserController::class, 'UserIndex']);
// Route::get('/category', function () {
//     return view('frontend/category');
// });

// ==================================================
// admin route 


// Route::get('/', function () {
//     return view('admin/index');
// });
Route::get('/admin/users',[UserController::class, 'index']);
Route::get('/admin/add-user',[UserController::class, 'ViewaddUser']);
Route::post('/admin/add-user',[UserController::class, 'addUser']);

Route::get('/admin/post/',[PostController::class, 'index']);

Route::get('/admin/add-post',[PostController::class, 'ViewaddPost']);
Route::post('/admin/add-post',[PostController::class, 'addPost']);

Route::get('/admin/category',[CategoryController::class, 'index']);  
Route::get('/admin/add-category',[CategoryController::class, 'ViewaddCategory']);
Route::post('/admin/add-category',[CategoryController::class, 'addCategory']);




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
Route::get('/update-user', function () {
    return view('admin/update-user');
});

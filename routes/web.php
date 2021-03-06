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
Route::get('/login', function (){
    return view('login');
});


Route::get('/', function () {
    return view('index');
});
Route::get('/about', function (){
    return view('about');
});
Route::get('/shop', function (){
    return view('shop');
});
Route::get('/contact', function (){
    return view('contact');
});
Route::get('/shop_single', function (){
    return view('shop_single');
});
Route::get('/blog', function (){
    $blog = \App\blog::all();
    return view('blog', compact('blog'));
});

Route::get('/blog-single', function (){
    return view('blog-single');
});


Auth::routes();

Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

Route::resource('blogs', 'BlogController');

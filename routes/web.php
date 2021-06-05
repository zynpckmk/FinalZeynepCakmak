<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about/{who}/{age}', function ($who, $age) {
    return "About " . $who . ", who is ". $age. " years old. ";
});

Route::get('/contacts', function () {
    return "This is the contacts page.";
});

Route::get('/admin/post/example', array('as'=>'admin.home', function() {
    $url = route('admin.home');
    return "The URL of the page is: " . $url;
} ));

Route::resource('post', PostController::class);
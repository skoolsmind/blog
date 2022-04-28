<?php

use Illuminate\Support\Facades\Route;
use function Symfony\Component\String\jsonSerialize;

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

<<<<<<< HEAD
#show all pages
#show home pages
=======
>>>>>>> parent of 69a1531... add comment-3
Route::get('/', function () {

    return view('posts');
});


Route::get('post',function(){
    return view('post');
});

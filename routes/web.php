<?php

use Carbon\Carbon;
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


#show all pages
#test
Route::get('/posts', function () {

    return view('posts');
});


Route::get('post/{post}',function($slug){

    $path = __DIR__ . "/../resources/views/posts/{$slug}.html";

    if(!file_exists($path)){
        return redirect('/posts');
    }

    $post = cache()->remember("posts.{$slug}",now()->addSeconds(5),function() use($path){
        var_dump('file_get_contents');
        return file_get_contents($path);
    });

    return view('post',[
        'post'=>$post
    ]);
})->where('post','[A-z_\-]+');

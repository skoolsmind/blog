<?php

use App\Models\Category;
use App\Models\Post;
use Illuminate\Log\Logger;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use function logger;


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

Route::get('/posts', function () {

    DB::listen(function($query){
        //Log::info('foo');
        //logger($query->sql);
        logger($query->sql,$query->bindings);
    });
    return view('posts',[
        'posts'=>Post::all()->sortByDesc('created_at')
    ]);
});

Route::get('post/{post}',function(Post $post){

    return view('post',[
        'post'=> $post
    ]);

});

Route::get('categories/{category:slug}',function(Category $category){
    return view('posts',[
        'posts' => $category->posts
    ]);
});

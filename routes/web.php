<?php

use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;


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

    $files = File::files(resource_path("views/posts"));
    
    $posts = array_map(function($file){
        $document = YamlFrontMatter::parseFile($file);

        return new Post(
            $document->title,
            $document->date,
            $document->excerpt,
            $document->body(),
            $document->slug,
        );
    },$files);

    return view('posts',[
        'posts'=>$posts
    ]);
});

Route::get('post/{post}',function($slug){

    return view('post',[
        'post'=> Post::find($slug)
    ]);

})->where('post','[A-z_\-]+');

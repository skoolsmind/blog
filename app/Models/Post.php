<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use function array_map;
use function base_path;
use function cache;
use function collect;
use function file_exists;
use function file_get_contents;
use function redirect;
use function resource_path;

class Post //extends Model
{
    //use HasFactory;
    public $title;
    public $date;
    public $excerpt;
    public $body;
    public $slug;


    public function __construct($title, $date, $excerpt, $body, $slug)
    {
        $this->title = $title;
        $this->date = $date;
        $this->excerpt = $excerpt;
        $this->body = $body;
        $this->slug = $slug;
    }

    public static function find($slug)
    {
        return Post::all()->firstWhere('slug',$slug);
    }

    public static function findOrFail($slug)
    {
        $post = Post::find( $slug);

        if(!$post){
            throw new ModelNotFoundException();
        }
        return $post;
    }

    public static function all()
    {

        return cache()->rememberForever('posts.all',function(){
            return collect(File::files(resource_path("views/posts")))
                ->map(fn($file) => YamlFrontMatter::parseFile($file))
                ->map(fn($document) => new Post(
                    $document->title,
                    $document->date,
                    $document->excerpt,
                    $document->body(),
                    $document->slug,
                ))
                ->sortByDesc('date');
        });


    }
}

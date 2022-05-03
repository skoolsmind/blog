<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use function now;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Post::truncate();


        Post::factory()->create();

//        $user = User::factory()->create();
//
//        $personal = Category::create([
//            'name' => 'Personal',
//            'slug' => 'personal'
//        ]);
//
//        $family = Category::create([
//            'name' => 'Family',
//            'slug' => 'family'
//        ]);
//
//        $work = Category::create([
//            'name' => 'Work',
//            'slug' => 'work'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $family->id,
//            'slug' => 'my-first-post',
//            'title' => 'my first post',
//            'excerpt' => 'standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book',
//            'body' => '<p>standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>',
//            'created_at' => Carbon::now(),
//            'updated_at' => Carbon::now(),
//            'published_at' => Carbon::now(),
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $work->id,
//            'slug' => 'my-second-post',
//            'title' => 'my second post',
//            'excerpt' => 'standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book',
//            'body' => '<p>standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>',
//            'created_at' => Carbon::now(),
//            'updated_at' => Carbon::now(),
//            'published_at' => Carbon::now(),
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $personal->id,
//            'slug' => 'my-third-post',
//            'title' => 'my third post',
//            'excerpt' => 'standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book',
//            'body' => '<p>standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>',
//            'created_at' => Carbon::now(),
//            'updated_at' => Carbon::now(),
//            'published_at' => Carbon::now(),
//        ]);



    }
}

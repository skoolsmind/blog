<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="/app.css">

    </head>
    <body>

    @foreach($posts as $post)
        @dd($loop)
        <article class="@if($loop->last || $loop->even) mb-{{$loop->index}} @endif">
            <h1>
                <a href="/post/{{$post->slug}}">
                    {{$post->title}}
                </a>

            </h1>
            <div>
                <p>{{$post->excerpt}}</p>
            </div>
        </article>
    @endforeach
     </body>
</html>

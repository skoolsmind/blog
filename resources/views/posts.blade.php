@extends('layout')

@section('banner')
<h1>
    My Blog
</h1>
@endsection

@section('content')

@foreach($posts as $post)
    <article class="@if($loop->last || $loop->odd) mb-{{$loop->index}} @endif">
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

@endsection

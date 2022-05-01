<x-layout>
    <x-slot name="content">
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
    </x-slot>

</x-layout>

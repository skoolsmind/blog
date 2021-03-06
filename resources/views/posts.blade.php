<x-layout>

        @foreach($posts as $post)
                <article class="@if($loop->last || $loop->odd) mb-{{$loop->index}} @endif">
                    <h1>
                        <a href="/post/{{$post->slug}}">
                            {{$post->title}}
                        </a>

                    </h1>
                    <p>
                        By <a href="/authors/{{$post->author->username}}">
                            {{$post->author->name}}
                        </a>
                        in
                        <a href="/categories/{{$post->category->slug}}">
                            {{$post->category->name}}
                        </a>
                    </p>
                    <div>
                        <p>{{$post->excerpt}}</p>
                    </div>
                </article>
            @endforeach

</x-layout>



<x-layout>
    <article>
        <h1>
            {{$post->title}}
        </h1>
        <div>
            <p>
                {!! $post->body !!}
            </p>

        </div>

    </article>

    <a href="/posts">
        Go Back
    </a>

</x-layout>



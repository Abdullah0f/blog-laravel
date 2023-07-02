<x-layout>
    <article>
        <h1>
            {{ $post->title }}
        </h1>
        <p>
            By <a href="/authors/{{$post->author->username}}">{{ $post->author->username }}</a> in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a> category
        </p>
        <p>
            {{ $post->body }}
        </p>
        <a href="/posts">go back</a>
    </article>
</x-layout>
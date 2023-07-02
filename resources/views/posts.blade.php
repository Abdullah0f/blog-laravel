<x-layout>

    @foreach ($posts as $post)
    <div class="blog-post">
        <h1>
            <a href="/posts/{{ $post->slug}}">
                {{ $post->title }}
            </a>
        </h1>
        <p>
            By <a href="/authors/{{$post->author->username}}">{{ $post->author->username }}</a> in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a> category
        </p>
        <p>{{ $post->excerpt }}</p>
    </div>
    @endforeach
    
</x-layout>
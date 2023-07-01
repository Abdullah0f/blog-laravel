<x-layout>

    @foreach ($posts as $post)
    <div class="blog-post">
        <h1>
            <a href="/posts/{{ $post->slug}}">
                {{ $post->title }}
            </a>
        </h1>
        <p>{{ $post->excerpt }}</p>
    </div>
    @endforeach
    
</x-layout>
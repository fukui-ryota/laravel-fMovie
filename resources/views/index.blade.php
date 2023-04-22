<x-layout>
    <h1>fMovie</h1>
    <ul>
        {{-- <li><?php echo htmlspecialchars($post[0], ENT_QUOTES, 'UTF-8'); ?></li> --}}
        {{-- <li>{{ $posts[0] }}</li>
        <li>{{ $posts[1] }}</li>
        <li>{{ $posts[2] }}</li> --}}
    </ul>
    <ul>
        @forelse ($posts as $index => $post)
            <li>
                <a href="{{ route('posts.show', $index) }}">
                    {{ $post }}
                </a>
            </li>
        @empty
            <li>No posts yet!</li>
        @endforelse
    </ul>

</x-layout>

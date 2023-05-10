<x-layout>
    <x-slot name="title">
        fMovie
    </x-slot>
    <h1>
      <span>fMovie</span>
      <a href="{{ route('posts.create') }}">[Add]</a>
    </h1>
    <ul>
        {{-- <li><?php echo htmlspecialchars($post[0], ENT_QUOTES, 'UTF-8'); ?></li> --}}
        {{-- <li>{{ $posts[0] }}</li>
        <li>{{ $posts[1] }}</li>
        <li>{{ $posts[2] }}</li> --}}
    </ul>
    <ul>
        @forelse ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post) }}">
                    {{ $post->title }}
                </a>
            </li>
        @empty
            <li>No posts yet!</li>
        @endforelse
    </ul>

</x-layout>

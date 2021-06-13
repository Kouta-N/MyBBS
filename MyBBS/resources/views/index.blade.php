<x-layout>
    <x-slot name='title'>
        MyBBS
    </x-slot>

    <h1>
        <span>My BBS</span>
        <a href="{{ route('posts.create') }}">[Add]</a>
    </h1>
    <ul>
        @forelse($posts as $post)
        <li>
            <a href="{{route('posts.show',$post)}}">
            {{-- href="/posts/{{$index}}"と同じ意味 --}}
            {{$post->title}}
            </a>
        </li>
        @empty
        <li>No posts yet</li>
        @endforelse
    </ul>
</x-layout>


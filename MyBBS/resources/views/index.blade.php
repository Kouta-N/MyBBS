<x-layout>
    <x-slot name='title'>
        MyBBS
    </x-slot>

    <h1>My BBS</h1>
    <ul>
        @forelse($posts as $index => $post)
        <li>
            <a href="{{route('posts.show',$index)}}">
            {{-- href="/posts/{{$index}}"と同じ意味 --}}
            {{$post}}
            </a>
        </li>
        @empty
        <li>No posts yet</li>
        @endforelse
    </ul>
</x-layout>


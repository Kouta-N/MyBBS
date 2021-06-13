<x-layout>
    <x-slot name='title'>
        {{ $post->title }} - MyBBS
    </x-slot>

    <div class="back-link">
        &laquo;<a href="{{route('posts.index')}}">Back</a>
        {{-- laquoはLEFT-POINTING DOUBLE ANGLE QUOTATION MARK -- $bnspのようなもの --}}
    </div>
    <h1>
        <span>{{ $post->title }}</span>
        <a href="{{ route('posts.edit',$post) }}">[Edit]</a>
        <form method="post" action="{{ route('posts.destroy',$post) }}">
            @method('DELETE')
            @csrf
            <button class="btn">[x]</button>
        </form>
    </h1>
    <p>{!! nl2br(e($post->body)) !!}</p>
</x-layout>



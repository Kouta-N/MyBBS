<x-layout>
    <x-slot name='title'>
        {{ $post }} - MyBBS
    </x-slot>

    <div class="back-link">
        &laquo;<a href="{{route('posts.index')}}">Back</a>
        {{-- laquoはLEFT-POINTING DOUBLE ANGLE QUOTATION MARK -- $bnspのようなもの --}}
    </div>
    <h1>{{$post}}</h1>
</x-layout>



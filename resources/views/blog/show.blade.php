@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-left">
        <div class="py-4">
            <h1 class="text-6xl">
                {{ $post->title }}
            </h1>
        </div>
        <span class="text-gray-500">
            By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created at {{ date('jS M Y', strtotime($post->updated_at)) }}
        </span>
    </div>
    
    <div class="w-4/5 m-auto pt-10">
        <p class="text-xl text-gray-700 font-light font-bold">
            {{ $post->description }}
        </p>
    </div>
@endsection
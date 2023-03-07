@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl py-10">
                Blog Posts
            </h1>
        </div>
    </div>

    @if (session()->has('message'))
        <div class="w-4/5 m-auto mb-10">
            <p class="w-4/6 font-xs bg-green-500 text-gray-200 py-4 px-2 rounded-2xl">
                {{ session()->get('message') }}
            </p>
        </div>
    @endif

    @if (Auth::check())
        <div class="pt-15 w-4/5 m-auto my-3">
            <a href="/blog/create" class="uppercase text-xs font-semibold px-5 py-2 bg-blue-600 text-gray-200 rounded-3xl">Create Post</a>
        </div>
    @endif

    @foreach ($posts as $post )
        <div class="sm:grid grid-cols-2 gap-20 w-4/5 border-b  border-x-gray-200 py-16 mx-auto">
            <div>
                <img src=images/{{$post->image_path }} width="700" alt="">
            </div>
            <div>
                <h1 class="text-5xl font-bold text-gray-700 pb-4">
                    {{ $post->title }}
                </h1>
                <span class="text-gray-500">
                    By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created at {{ date('jS M Y', strtotime($post->updated_at)) }}
                </span>
                <p class="text-xl text-gray-800 pb-10 pt-6 leading-8 font-light">
                    {{ Str::limit($post->description, 40, '...') }}
                </p>
                <a href="/blog/{{ $post->slug }}" class="text-l font-extrabold text-gray-200 bg-blue-600 uppercase px-8 py-4 rounded-3xl">Keep Reading</a>
                <span class="float-right">
                    <a href="/blog/{{ $post->slug }}/edit"
                        class="mx-4 px-6 text-grey-500 italic border rounded-2xl bg-slate-900 text-white hover:bg-teal-700">
                        Edit
                    </a>
                </span>
                <span class="float-right">
                    <form action="/blog/{{ $post->slug }}/delete"
                        method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" 
                            class="text-red-500">
                            Delete
                        </button>
                    </form>
                </span>
            </div>
        </div>
    @endforeach
@endsection
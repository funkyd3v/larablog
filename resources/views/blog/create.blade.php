@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-left">
        <div class="py-15">
            <h1 class="text-6xl py-10">
                Create Post
            </h1>
        </div>
    </div>

    @if ($errors->any())
        <div class="w-4/5 m-auto">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="bg-red-700 text-gray-200 rounded-3xl w-1/5 mb-1 px-4 py-2">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <div class="w-4/5 m-auto pt-20">
        <form action="{{ route('blog.store') }}"
        method="POST" enctype="multipart/form-data">
        @csrf

        <input type="text"
        name="title"
        placeholder="Title..."
        class="bg-transparent block border-b-2 w-full h-20 text-xl outline-none rounded-3xl">
        <textarea name="description"
        placeholder="Description..."
        class="bg-transparent mt-10 text-xl block border-b-2 w-full h-60 outline-none rounded-3xl"
        ></textarea>
        <div class="bg-grey-lighter pt-15 mt-6">
            <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue-300 cursor-pointer rounded-3xl"
            >
                <span class="mt-2 text-base leading-normal">Select a file</span>
                <input type="file" name="image" class="hidden">
            </label>
        </div>
        <button
            type="submit"
            class="bg-blue-500 text-gray-100 mt-10 py-4 px-8 text-xl font-extrabold rounded-3xl">
            Submit
        </button>
        </form>
    </div>
@endsection
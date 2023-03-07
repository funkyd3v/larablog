@extends('layouts.app')

@section('content')
<div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="pt-4 pb-10 m-auto sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                Do you want to become a developer?
            </h1>
            <a href="" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl">Read more...</a>
        </div>
    </div>
</div>
<div class="mt-10 sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15">
    <div>
        <img src="https://cdn.pixabay.com/photo/2015/01/08/18/25/desk-593327_960_720.jpg" width="700" alt="">
    </div>
    <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-3xl font-extrabold text-gray-600">
            Struggling to be a better developer?
        </h2>
        <p class="py-8 text-gray-600 text-sm">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit minima id totam.
        </p>
        <p class="font-extrabold text-gray-600 text-sm pb-9">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit pariatur id quam obca.
        </p>
        <a href="/blog" class="uppercase font-extrabold px-8 py-3 text-gray-100 bg-blue-500 rounded-3xl">
            Find out more
        </a>
    </div>
</div>
<div class="text-center mt-20 p-15 bg-black text-white">
    <h2 class="text-2xl pb-5">I am expert in...</h2>
    <span class="font-extrabold text-4xl block py-1">
        Web Development
    </span>
    <span class="font-extrabold text-4xl block py-1">
        Mobile App Development
    </span>
    <span class="font-extrabold text-4xl block py-1">
        Project Management
    </span>
    <span class="font-extrabold text-4xl block py-1">
        Backend Development
    </span>
</div>
<div class="text-center py-14">
    <span class="text-sm text-gray-400 uppercase">
        Blog
    </span>
    <h2 class="text-4xl font-bold py-10">
        Recent Posts
    </h2>
    <p class="m-auto w-4/5 text-gray-500">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, consectetur ipsam dolores animi quae quidem.
    </p>
</div>
<div class="sm:grid grid-cols-2 m-auto w-4/5">
    <div class="flex bg-yellow-700 text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-10 sm:m-auto w-4/5 block">
            <span class="uppercase text-xs">
                PHP
            </span>
            <h3 class="text-l font-bold py-5">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, facere omnis nam est voluptatem sapiente quidem iste hic nostrum illum, amet neque, veniam consectetur ipsum saepe odio necessitatibus repudiandae obcaecati?
            </h3>
            <a href="" class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 rounded-3xl text-xs font-extrabold py-3 px-5">
                Find out more
            </a>
        </div>
    </div>
    <div>
        <img src="https://cdn.pixabay.com/photo/2015/01/08/18/25/desk-593327_960_720.jpg" width="700" alt="">
    </div>
</div>
@endsection
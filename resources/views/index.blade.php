@extends('layouts.app')

@section('content')
<div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">Chcesz być developerem?</h1>
            <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">Więcej...</a>
        </div>
    </div>
</div>

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="https://media.istockphoto.com/id/1394016811/pl/zdj%C4%99cie/laptop-i-smartfon-z-pustym-ekranem-izolowany-na-bia%C5%82ym-tle.jpg?s=2048x2048&w=is&k=20&c=JDMFyWNH83jYCp6EWTENnBgfPZJTyIkTNX1vaZH4VqY=" width="700" alt="laptop">
    </div>
    <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-4xl font-extrabold text-gray-600">Trudno zostać developerem?</h2>
        <p class="py-9 text-gray-500 text-s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem illo commodi temporibus eaque, </p>
        <p class="font-extrabold text-gray-600 text-s pb-9">Lorem ipsum dolor sit amet consectetur adtemporibus ipsum!</p>

        <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">Dowiedz się wiecej</a>
    </div>
</div>

<div class="text-center p-15 bg-black text-white">
    <h2 class="text-2xl pb-5 text-m"> Jestem...</h2>

    <span class="font-extrabold block text-2xl py-1">Ux Design</span>
    <span class="font-extrabold block text-2xl py-1">Project Managment</span>
    <span class="font-extrabold block text-2xl py-1">Strategy</span>
    <span class="font-extrabold block text-2xl py-1">Backend</span>
</div>

<div class="text-center py-15">
    <span class="uppercase text-s text-gray-400">Blog</span>

    <h2 class="text-3xl font-bold py-10">Najnowszy post</h2>
    <p class="m-auto w-4/5 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic soluta reiciendis rem incidunt quod magnam illum provident et .</p>
</div>

<div class="sm:grid grid-cols-2 w-4/5 m-auto">
    <div class="flex bg-yellow-700 text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
            <span class="uppercase text-xs">PHP</span>
            <h3 class="text-xl font-bold py-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore dolores ullam quidem sint quam necessitatibus cum, facilis numquam odit officia? Minus quo in labore tempore. Perspiciatis iure rerum animi repellendus?</h3>
            <a href="" class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">Dowiedz się więcej</a>
        </div>
    </div>
    <div>
        <img src="https://media.istockphoto.com/id/1394016811/pl/zdj%C4%99cie/laptop-i-smartfon-z-pustym-ekranem-izolowany-na-bia%C5%82ym-tle.jpg?s=2048x2048&w=is&k=20&c=JDMFyWNH83jYCp6EWTENnBgfPZJTyIkTNX1vaZH4VqY=" width="700" alt="laptop">
    </div>

</div>
@endsection

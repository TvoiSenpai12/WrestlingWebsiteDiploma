@extends('layout.app')
@section('title', 'Главная страница')
@section('content')
    <header>
        @include('partials.header')
        <div class="flex items-center justify-center h-screen m-auto mb-12 bg-fixed bg-center bg-cover h-96" style="background-image: url(/resources/img/header.png);">
            <div class="flex items-center justify-center w-full h-full bg-gray-900 bg-opacity-50">
                <div class="text-center">
                    <h1 class="text-2xl font-semibold text-white uppercase lg:text-3xl">ГРЕКО-РИМСКАЯ БОРЬБА В <span class="text-red-500">РОСТОВЕ-НА-ДОНУ</span></h1>
                    </div>
            </div> 
        </div>
    </header>

    <main>
        <section>
            <div class="container">

            </div>
        </section>
    
    <section class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <h2 class="text-center font-bold text-3xl p-5">НОВОСТИ</h2>
        <div class="grid gap-8 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
        @foreach ($posts as $post)
            @include('posts.partials.item', ["post" => $post])
        @endforeach
        </div>
    </section>
    </main>

    <footer>
        @include('partials.footer')
    </footer>
@endsection
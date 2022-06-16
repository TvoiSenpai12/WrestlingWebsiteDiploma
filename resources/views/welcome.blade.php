@extends('layout.app')
@section('title', 'Главная страница')
@section('content')
    <header>
        @include('partials.header')
        <div class="flex items-center justify-center h-screen m-auto mb-12 bg-fixed bg-center bg-cover h-96" style="background-image: url(/resources/img/header.png);">
            <div class="flex items-center justify-center w-full h-full bg-gray-900 bg-opacity-50">
                <div class="text-center">
                    <h1 class="font-bold text-2xl text-white uppercase lg:text-3xl">ГРЕКО-РИМСКАЯ БОРЬБА В <span class="text-red-500 font-bold">РОСТОВЕ-НА-ДОНУ</span></h1>
                    </div>
            </div> 
        </div>
    </header>

    <main>
        <section class="flex justify-center">
            <div class="container flex justify-center  divide-solid border-2 border-black " style="background-image: url(/resources/img/texture.jpg);">
                <div class="flex flex-col">
                    <h4 class="text-2xl">Цитаты</h4>
                    <p>Не стесняйся себя. Если решил - действуй. Далее - не наступай на ногу.
                        То есть не нарушай правила. И помни, что лучший помощник - дисциплина.
                        Все можно разрушить праздностью, которая помешает достичь
                        по-настоящему больших результатов.
                    </p>
                    </div>

                <div class="flex flex-col items-center text-center">
                    <img src="/resources/img/citata1.jpg" alt="" class="w-40 rounded-tl-full rounded-bl-full rounded-br-full rounded-tr-full">
                    Александр Карелин<br/>
                    Заслуженный мастер спорта СССР 1988
                    Герой Российской Федерации 1996
                </div>
                <button>&gt;</button>
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
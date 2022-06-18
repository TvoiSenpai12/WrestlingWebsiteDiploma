@extends('layout.app')
@section('title', 'Главная страница')
@section('content')
    <header>
        @include('partials.header')
        <div class="flex items-center justify-center m-auto mb-12 bg-fixed bg-center bg-cover" style="background-image: url(/resources/img/header.png); height: 550px;">
            <div class="flex items-center justify-center w-full h-full bg-gray-900 bg-opacity-50">
                <div class="text-center">
                    <h1 class="font-bold text-2xl text-white uppercase lg:text-3xl">ГРЕКО-РИМСКАЯ БОРЬБА В <span class="text-red-500 font-bold">РОСТОВЕ-НА-ДОНУ</span></h1>
                    </div>
            </div> 
        </div>
    </header>

    <main>
        
        <section class="flex justify-center slider flex-wrap">
            <div class="item active">
                <div class="container items-center flex justify-center divide-solid border-2 border-black" style="background-image: url(/resources/img/texture.jpg);">
                    <div class="flex flex-col w-2/4 border-l-4 border-red-500 pl-5">
                        <h4 class="font-bold text-3xl">Цитаты</h4>
                        <p>
                            Не стесняйся себя. Если решил - действуй. Далее - не наступай на ногу.
                            То есть не нарушай правила. И помни, что лучший помощник - дисциплина.
                            Все можно разрушить праздностью, которая помешает достичь
                            по-настоящему больших результатов.
                        </p>
                    </div>
    
                    <div class="flex flex-col items-center text-center m-16">
                        <img src="/resources/img/citata1.jpg" alt="Александр Карелин" class="w-48 h-36 rounded-bl-full rounded-br-full rounded-tr-full rounded-tl-full">
                        Александр Карелин<br/>
                        Заслуженный мастер спорта СССР 1988г<br/>
                        Герой Российской Федерации 1996г
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="container items-center flex justify-center divide-solid border-2 border-black" style="background-image: url(/resources/img/texture.jpg);">
                    <div class="flex flex-col w-2/4 border-l-4 border-red-500 pl-5">
                        <h4 class="font-bold text-3xl">Цитаты</h4>
                        <p>
                            -Ни одного дня без упражнений.
                            Природа не наградила тебя силой, но если будешь каждый день
                            КАЧАТЬ мускулы - выйдет толк. И борцом станешь хорошим.
                        </p>
                    </div>
    
                    <div class="flex flex-col items-center text-center m-16">
                        <img src="/resources/img/citata2.jpg" alt="Иван Поддубный" class="w-48 h-36 rounded-bl-full rounded-br-full rounded-tr-full rounded-tl-full">
                        Иван Поддубный<br/>
                        Первый шестикратный чемпион мира по <br/>греко-римской борьбе 1905г-1909г<br/>
                        Заслуженный мастер спорта СССР 1945г<br/>
                        Орден Почётного легиона 1911г
                    </div>
                </div>
            </div>
            <button onclick="plusSlide()" class="text-9xl">&gt;</button>
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
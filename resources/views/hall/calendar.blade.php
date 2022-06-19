@extends('layout.app')
@section('title', 'Календарь соревнований - Клуб "АТЛАНТ" Греко-римская борьба в Ростове-на-Дону')
@section('content')
    <header>
        @include('partials.header')
    </header>

    <main>
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
              <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                Календарь соревнований
              </h2>
              <p class="text-regular text-gray-700 md:text-lg">
                Спортивные соревнования — это объективный способ демонстрации достигнутых результатов, оценки и сравнения достижений определенных спортсменов и команд.
              </p>
              <p class="text-bold text-black text-2xl">
                В календаре соревнований Вы можете отслеживать запланированные соревнования. 
              </p>
            </div>
            <div class="mx-auto lg:max-w-2xl">
              <div class="relative w-full transition-shadow duration-300 hover:shadow-xl">
                <iframe src="https://calendar.yandex.ru/embed/week?&layer_ids=18960669&tz_id=Europe/Moscow&layer_names=Зал греко-римской борьбы клуб АТЛАНТ" width="100%" height="450" frameborder="0" style="border: 1px solid #eee"></iframe>
              </div>
            </div>
          </div>
    </main>

    <footer>
        @include('partials.footer')
    </footer>
@endsection
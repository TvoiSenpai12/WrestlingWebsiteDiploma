@extends('layout.app')
@section('title', 'Контакты')
@section('content')
    <header>
        @include('partials.header')
    </header>

    <main>
        <div class="px-4 py-16 mt-4 mb-12 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="grid gap-10 lg:grid-cols-2">
              <div class="lg:pr-10">
                <h5 class="mb-4 text-2xl font-bold leading-none">
                    Зал греко-римской борьбы "АТЛАНТ"
                </h5>
                <h5 class="mb-4 text-1xl font-bold leading-none text-gray-600">
                    ОБЩЕСТВЕННАЯ ОРГАНИЗАЦИЯ РОСТОВСКИЙ ГОРОДСКОЙ <br class="hidden md:block" /> ДЕТСКО-ЮНОШЕСКИЙ СПОРТИВНЫЙ КЛУБ "АТЛАНТ"<br class="hidden md:block" /> ИМЕНИ КИСЕЛЕВА В.Г. ДЮСШ №8
                </h5>
                <hr class="mb-5 border-gray-300" />
                <h5 class="mb-4 text-1xl font-bold leading-none text-gray-500">
                    НАШИ ДАННЫЕ:
                </h5>
                <ul>
                    <li class="font-light">г. Ростов-на-Дону</li>
                    <li class="font-light">проспект Ставского, 33</li>
                    <li class="font-light">Контактный номер: +7(928) 103-23-53</li>
                    <li class="font-light">Юридический адрес: 344101, РОСТОВСКАЯ ОБЛАСТЬ, Г РОСТОВ-НА-ДОНУ, ПРОСП СТАВСКОГО, 33</li>
                    <li class="font-light">GPS координаты: 47.21692276,39.682353973</li>
                </ul>
                
              </div>
              <div>
                <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/39/rostov-na-donu/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Ростов‑на‑Дону</a><a href="https://yandex.ru/maps/39/rostov-na-donu/house/prospekt_stavskogo_33/Z0AYcA9iS0YEQFptfX5wd3RrbA==/?ll=39.682154%2C47.216683&utm_medium=mapframe&utm_source=maps&z=18.36" style="color:#eee;font-size:12px;position:absolute;top:14px;">Яндекс Карты</a><iframe src="https://yandex.ru/map-widget/v1/-/CCUJfIhGCC" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
              </div>
            </div>
          </div>
    </main>

    <footer>
        @include('partials.footer')
    </footer>
@endsection
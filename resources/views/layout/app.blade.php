<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Греко-римская борьба. Греко-римская борьба — европейский вид единоборства, в котором спортсмен должен, с помощью определённого арсенала технических действий (приёмов), вывести соперника из равновесия и прижать лопатками к ковру. В греко-римской борьбе, в отличие от вольной, запрещены технические действия ногами (зацепы, подножки, подсечки) и захваты ног руками. Классическая борьба родилась в Древней Греции и получила развитие в Римской империи, а современный вид греко-римской борьбы сформировался во Франции в первой половине 19 века. Адрес: г. Ростов-на-Дону, проспект Станиславского, 33 Телефон: +7 928 1032353, GPS координаты: 47.21692276,39.682353973">
    <meta name="keywords" content="Греко-римская борьба, Ростов-на-Дону, Клуб АТЛАНТ, ДЮСШ 8, Борьба, Спортивная секция, греко римская борьба россии, Греко-римская борьба в Ростове, АТЛАНТ, детско-юношеская спортивная школа, Greco-Roman wrestling, Rostov-on-Don, ATLANT Club, Sports Section, Greco-Roman wrestling in Rostov">

    <title>@yield('title')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300;400;700&display=swap" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    
    @yield('content')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</body>
</html>

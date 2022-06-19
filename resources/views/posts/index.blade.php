@extends('layout.app')
@section('title', 'Новости - Клуб "АТЛАНТ" Греко-римская борьба в Ростове-на-Дону')
@section('content')
    @include('partials.header')

    <section class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="grid gap-8 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
            @foreach ($posts as $post)
                @include('posts.partials.item', ["post" => $post])
            @endforeach
        </div>
        <br>
        <div class="max-w-2xl mx-auto flex justify-center">
            <div class="inline-flex -space-x-px">
                {{ $posts->links() }}
            </div>
        </div>
    </section>

<footer>
    @include('partials.footer')
</footer>
@endsection
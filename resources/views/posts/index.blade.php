@extends('layout.app')
@section('title', 'Статьи')
@section('content')
    @include('partials.header')

    <section class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="grid gap-8 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
        @foreach ($posts as $post)
            @include('posts.partials.item', ["post" => $post])
        @endforeach
        
    </div>
    <br>
    {{ $posts->links() }}
</section>
@endsection
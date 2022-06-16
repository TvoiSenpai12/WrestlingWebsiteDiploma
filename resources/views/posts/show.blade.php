@extends('layout.app')
@section('title', $post->title)
@section('content')
    @include('partials.header')
<div class="max-w-screen-lg mx-auto p-5 sm:p-10 md:p-16">
    <div class="mb-10 rounded overflow-hidden flex flex-col mx-auto">
        <h5 class="mb-4 text-6xl font-extrabold leading-none">
            {{ $post->title }}
            <br class="hidden md:block" />
          </h5>
          <hr class="mb-5 border-gray-300" />
          <p class="mb-6 text-gray-900">
            {!! $post->preview !!}  
          </p>
        <img class="w-full" src="../storage/posts/{{ $post->thumbnail }}" alt="Sunset in the mountains">
      <p class="text-gray-700 py-5 text-base leading-8">
        {!! $post->description !!}   
      </p>
  </div>
</div>

<h2 class="text-center font-bold text-3xl p-3">Другие новости</h2>


@endsection
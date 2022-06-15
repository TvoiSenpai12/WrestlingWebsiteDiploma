@extends('layout.admin')
@section('title', isset($post) ? "Редактировать новость ID {$post->id}" : "Добавить новость")
@section('content')
<div class="container mx-auto px-6 py-8">
    <h3 class="text-gray-700 text-3xl font-medium">{{ isset($post) ? "Редактировать новость ID {$post->id}" : "Добавить новость" }}</h3>

    <div class="mt-8">

    </div>

    <div class="mt-8">
        <form enctype="multipart/form-data" class="space-y-5 mt-5" method="POST" action="{{ isset($post) ? route("admin.posts.update", $post->id) : route("admin.posts.store") }}">
            @csrf

            @if(isset($post))
                @method('PUT')
            @endif

            <input name="title" type="text" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Название" value="{{ $post->title ?? '' }}"  />
            @error('title')
                <p class="text-red-500">{{ $message }}</p>
            @enderror

            <input name="preview" type="text" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Краткое описание" value="{{ $post->preview ?? '' }}" />
            @error('preview')
                <p class="text-red-500">{{ $message }}</p>
            @enderror

            <input name="description" type="text" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Описание" value="{{ $post->description ?? '' }}" />
            @error('description')
                <p class="text-red-500">{{ $message }}</p>
            @enderror

            @if(isset($post) && $post->thumbnail)
                <div>
                    <img class="h-64 w-64" src="/public/storage/posts{{ $post->thumbnail }}">
                </div>
            @endif

            <input name="thumbnail" type="file" class="w-full h-12" placeholder="Обложка" />
            @error('thumbnail')
                <p class="text-red-500">{{ $message }}</p>
            @enderror


            <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Сохранить</button>
        </form>
    </div>
</div>
@endsection
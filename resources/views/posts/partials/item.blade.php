<div class="overflow-hidden transition-shadow duration-300 bg-white rounded shadow-sm">
    <img src="./storage/posts/{{ $post->thumbnail }}" class="object-cover w-full h-64" alt="" />
    <div class="p-5 border border-t-0">
        <a href="/" aria-label="Заголовок" title="Заголовок" class="inline-block mb-3 text-2xl font-bold leading-5 transition-colors duration-200 hover:text-deep-purple-accent-700">{{ $post->title }}</a>
        <p class="mb-2 text-gray-700">
            {!! $post->preview !!}
        </p>
        <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">
            <button class="border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline">Подробнее</button>
        </a>
    </div>
</div>
<div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden">
    <img class="h-56 lg:h-60 w-full object-cover" src="./storage/posts/{{ $post->thumbnail }}" alt="" />
    <div class="p-3">
        <h3 class="font-semibold text-xl leading-6 text-gray-700 my-2">
            {{ $post->title }}
        </h3>
        <p class="paragraph-normal text-gray-600">
            {!! $post->preview !!}
        </p>
        <div class="flex justify-between float-right">
            <a href="{{ route("posts.show", $post->id) }}" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">
                <button class="border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline">Подробнее</button>
            </a>
        </div>
    </div>
</div>
<div class="flex items-center justify-center text-center h-screen m-auto bg-fixed bg-center bg-cover" style="background-image: url(/resources/img/footer.png); height: 560px;">
  <div class="flex flex-col justify-center px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
    <div class="container px-6 pt-6">
      <div class="flex justify-center mb-12">
        <img src="/resources/img/logo.png" alt="">
      </div>
      <div class="flex justify-center flex-wrap mb-10">
        <div>
          <a href="{{ route("home") }}">
            <p class="font-blod tracking-wide text-white text-xl p-5">ГЛАВНАЯ</p>
          </a>
        </div>
        <div>
          <div x-data="{ dropdownOpen: false }" class="relative">
            <button @click="dropdownOpen = !dropdownOpen" class="font-blod tracking-wide text-white text-xl p-5">
              ЗАЛ
            </button>
              <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>
            <div x-show="dropdownOpen" class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20">
              <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-red-500 hover:text-white">
                КАЛЕНДАРЬ СОРЕВНОВАНИЙ
              </a>
              <a href="{{ route("history") }}" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-red-500 hover:text-white">
                ИСТОРИЯ БОРЬБЫ
              </a>
            </div>
          </div>
        </div>
        <div>
          <a href="{{ route("posts.index") }}">
            <p class="font-blod tracking-wide text-white text-xl p-5">НОВОСТИ</p>
          </a>
        </div>
        <div>
          <a href="{{ route("contacts.index") }}">
            <p class="font-blod tracking-wide text-white text-xl p-5">КОНТАКТЫ</p>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="bg-gray-900">
    <nav class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
      <div class="relative flex items-center justify-between">
          <a href="{{ route("home") }}" aria-label="Company" title="Company" class="inline-flex items-center">
            <img src="/resources/img/logo.png" alt="">
        </a>
        <ul class="flex items-center hidden space-x-8 lg:flex">
          <li><a href="{{ route("home") }}" aria-label="ГЛАВНАЯ" title="ГЛАВНАЯ" class="font-bold tracking-wide text-white transition-colors duration-200 text-xl hover:text-red-500">ГЛАВНАЯ</a></li>
          <li x-data="{ dropdownOpen: false }" class="relative">
            <button @click="dropdownOpen = !dropdownOpen" class="font-bold tracking-wide text-white transition-colors duration-200 text-xl hover:text-red-500">
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
          </li>
          <li><a href="{{ route("posts.index") }}" aria-label="НОВОСТИ" title="НОВОСТИ" class="font-bold tracking-wide text-white transition-colors duration-200 text-xl hover:text-red-500">НОВОСТИ</a></li>
          <li><a href="{{ route("contacts") }}" aria-label="КОНТАКТЫ" title="КОНТАКТЫ" class="font-bold tracking-wide text-white transition-colors duration-200 text-xl hover:text-red-500">КОНТАКТЫ</a></li>
        </ul>
        <ul class="flex items-center hidden space-x-8 lg:flex">
          <li>
            <a href="/" class="" aria-label="Записаться" title="Записаться">
              <button class="border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline font-bold hover:text-gray-300">ЗАПИСАТЬСЯ</button>
            </a>
          </li>
        </ul>
        
        <!-- Mobile menu -->
        <div class="lg:hidden">
          <button aria-label="Open Menu" title="Open Menu" class="p-2 -mr-1 transition duration-200 rounded focus:outline-none focus:shadow-outline burger">
            <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
              <path fill="currentColor" d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z"></path>
              <path fill="currentColor" d="M23,6H1C0.4,6,0,5.6,0,5s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6,23,6z"></path>
              <path fill="currentColor" d="M23,20H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,20,23,20z"></path>
            </svg>
          </button>
          <div class="burger-hidden-none">
            <ul class="flex flex-wrap flex-col items-center space-x-8 lg:flex">
              <li><a href="{{ route("home") }}" aria-label="ГЛАВНАЯ" title="ГЛАВНАЯ" class="font-bold tracking-wide text-white transition-colors duration-200 text-xl hover:text-red-500">ГЛАВНАЯ</a></li>
              <li x-data="{ dropdownOpen: false }" class="relative">
                <button @click="dropdownOpen = !dropdownOpen" class="font-bold tracking-wide text-white transition-colors duration-200 text-xl hover:text-red-500">
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
              </li>
              <li><a href="{{ route("posts.index") }}" aria-label="НОВОСТИ" title="НОВОСТИ" class="font-bold tracking-wide text-white transition-colors duration-200 text-xl hover:text-red-500">НОВОСТИ</a></li>
              <li><a href="{{ route("contacts") }}" aria-label="КОНТАКТЫ" title="КОНТАКТЫ" class="font-bold tracking-wide text-white transition-colors duration-200 text-xl hover:text-red-500">КОНТАКТЫ</a></li>
            </ul>
            <ul class="flex items-center space-x-8 lg:flex">
              <li>
                <a href="/" class="" aria-label="Записаться" title="Записаться">
                  <button class="border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline font-bold hover:text-gray-300">ЗАПИСАТЬСЯ</button>
                </a>
              </li>
            </ul>
          </div>
        </div>
        
      </nav>
    </div>
</div>

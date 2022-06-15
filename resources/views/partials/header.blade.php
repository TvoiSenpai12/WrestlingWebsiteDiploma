<div class="bg-gray-900">
    <div class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
      <div class="relative flex items-center justify-between">
          <a href="{{ route("home") }}" aria-label="Company" title="Company" class="inline-flex items-center">
            <img src="/resources/img/logo.png" alt="">
        </a>
        <ul class="flex items-center hidden space-x-8 lg:flex">
          <li><a href="{{ route("home") }}" aria-label="ГЛАВНАЯ" title="ГЛАВНАЯ" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">ГЛАВНАЯ</a></li>
          <li><a href="/" aria-label="ИСТОРИЯ БОРЬБЫ" title="ИСТОРИЯ БОРЬБЫ" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">ИСТОРИЯ БОРЬБЫ</a></li>
          <li><a href="{{ route("posts.index") }}" aria-label="НОВОСТИ" title="НОВОСТИ" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">НОВОСТИ</a></li>
          <li><a href="/" aria-label="КОНТАКТЫ" title="КОНТАКТЫ" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">КОНТАКТЫ</a></li>
        </ul>
        <ul class="flex items-center hidden space-x-8 lg:flex">
          <li>
            <a href="/" class="" aria-label="Записаться" title="Записаться">
              <button class="border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline">ЗАПИСАТЬСЯ</button>
            </a>
          </li>
        </ul>
        <!-- Mobile menu -->
        <div class="lg:hidden">
          <button aria-label="Open Menu" title="Open Menu" class="p-2 -mr-1 transition duration-200 rounded focus:outline-none focus:shadow-outline">
            <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
              <path fill="currentColor" d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z"></path>
              <path fill="currentColor" d="M23,6H1C0.4,6,0,5.6,0,5s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6,23,6z"></path>
              <path fill="currentColor" d="M23,20H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,20,23,20z"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div> 

<div
     class="flex-col pt-4 pb-12 text-center text-white left-1/2 md:absolute md:left-8 md:h-full md:flex md:justify-center md:mt-0">
  <a href="{{ route('setLocale', 'en') }}"
     class="text-white rounded-full ">
    <button
            class="w-12 h-12 mb-4 mr-8 border-2 rounded-full border-white-500 {{ Config::get('app.locale') === 'en' ? 'bg-white text-gray-800' : '' }} ">
      en
    </button>
  </a>
  <a href="{{ route('setLocale', 'ka') }}"
     class="text-white">
    <button
            class="w-12 h-12 mb-4 mr-8 border-2 rounded-full border-white-500 {{ Config::get('app.locale') === 'ka' ? 'bg-white text-gray-800' : '' }} ">
      ka
    </button>
  </a>
</div>

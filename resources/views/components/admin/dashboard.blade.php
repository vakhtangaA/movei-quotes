<x-layout>
  <div class="flex flex-row-reverse justify-between w-full p-4 md:hidden">
    <div class="flex">
      <img class="inline-block w-10 h-10 rounded-full"
           src="{{ asset('/images/ape.jpg') }}"
           alt="" />
      <div class="ml-3">
        <p class="text-base font-medium text-blue-400">
          Admin
        </p>
        <p class="text-sm font-medium text-gray-400 group-hover:text-gray-300">
          <a href="{{ route('logout') }}">Logout</a>
        </p>
      </div>
    </div>
    <div>
      <a class="pl-2 border-l-2 border-gray-400"
         href="{{ request()->fullUrlWithQuery(['slot' => 'movies']) }}
        ">Movies</a>
      <a class="pl-2 border-l-2 border-gray-400"
         href="{{ request()->fullUrlWithQuery(['slot' => 'quotes']) }} ">Quotes</a>
      <a class="pl-2 border-l-2 border-gray-400"
         href="{{ request()->fullUrlWithQuery(['slot' => 'film']) }} ">New
        Film</a>
    </div>
  </div>

  <!-- Static sidebar for desktop -->
  <div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
    <!-- Sidebar component, swap this element with another sidebar if you like -->
    <div class="flex flex-col flex-1 min-h-0 bg-white shadow-2xl">
      <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
        <div class="flex items-center flex-shrink-0 px-4 pb-3 border-b-2 border-gray-400 rounded-full">
          <a href="{{ route('home') }}"
             class="flex no-underline">

            <img class="w-auto h-8 mr-3"
                 src="{{ asset('images/favicon.ico') }}"
                 alt="Workflow">
            <p class="font-mono text-2xl font-extrabold text-blue-500 hover:underline">
              Movie Quotes
            </p>
          </a>
        </div>
        <nav class="flex-1 px-2 mt-5 space-y-1">
          <a href="{{ request()->fullUrlWithQuery(['slot' => 'movies']) }} "
             class="flex items-center px-2 py-2 text-sm font-medium  rounded-md hover:bg-gray-700 hover:text-white group {{ request()->get('slot') === 'movies' ? 'text-yellow-600' : 'text-gray-300' }} {{ !isset(request()->query()['slot']) ? 'text-yellow-600' : 'text-gray-300' }}">
            @include('components.svgs.home-icon')
            Movies
          </a>
          <a href="{{ request()->fullUrlWithQuery(['slot' => 'film']) }} "
             class="flex items-center px-2 py-2 text-sm font-medium rounded-md text-gra-50 group hover:bg-gray-700 hover:text-white {{ request()->get('slot') === 'film' ? 'text-yellow-500' : 'text-gray-300' }}">
            @include('components.svgs.quote-icon')
            New Film
          </a>

          <a href="{{ request()->fullUrlWithQuery(['slot' => 'quotes']) }} "
             class="flex items-center px-2 py-2 text-sm font-medium  rounded-md hover:bg-gray-700 hover:text-white group {{ request()->get('slot') === 'quotes' ? 'text-yellow-600' : 'text-gray-300' }}">
            @include('components.svgs.quote-icon')
            Quotes
          </a>

        </nav>
      </div>
      <div class="flex flex-shrink-0 p-4 bg-gray-500 shadow-2xl drop-shadow-2xl ">
        <div class="flex items-start justify-start">
          <div>
            <img class="inline-block rounded-full h-9 w-9"
                 src="{{ asset('/images/ape.jpg') }}"
                 alt="Admin avatar" />
          </div>
          <div class="ml-3">
            <p class="text-sm font-medium text-white">Admin</p>
            <p class="text-xs font-medium text-gray-300 group-hover:text-gray-200">
              <a class="text-base text-red-400 cursor-pointer"
                 href="{{ route('logout') }}">
                Logout
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="flex flex-col flex-1 md:pl-64">
    <main class="flex-1">
      <div class="py-6">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
          <h1 class="text-2xl font-semibold text-white">
            New Film
          </h1>
        </div>
        <div class="h-full px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
          <!-- main logic for dashboard -->
          <div class="py-4">
            <div class="">
              @if (request()->get('slot') === 'film')
                <x-movies.create>
                </x-movies.create>
                <!-- if there is not slot defined in url, app will serve movies component as default -->
              @elseif(request()->get('slot') === 'movies' || !isset(request()->query()['slot']))
                <x-movies.movies :movies="$movies">
                </x-movies.movies>
              @elseif(request()->get('slot') === 'edit')
                <x-movies.edit :movie="$currentMovie">
                </x-movies.edit>
              @elseif(request()->get('slot') === 'quote')
                <x-quotes.create-quote :movie="$currentMovie">
                </x-quotes.create-quote>
              @elseif(request()->get('slot') === 'quotes')
                <x-quotes.quotes :quotes="$quotes">
                </x-quotes.quotes>
              @elseif(request()->get('slot') === 'update_quote')
                <x-quotes.update-quote :quotes="$quotes">
                </x-quotes.update-quote>
              @endif
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
  </div>
</x-layout>

<x-layout>
  <div class="flex flex-col min-h-full m-auto bg-costum-black">
    <x-utils.language-switcher></x-utils.language-switcher>
    <div>
      <div class="max-w-2xl min-h-full m-auto ">
        <h1 class="mt-16 mb-8 text-center text-white capitalize">
          {{ $movie->title }}</h1>
        @if ($quotes->count())
          @foreach ($quotes as $quote)
            <div class="m-auto mb-12 ">
              <img src="{{ asset($quote->imagePath) }}"
                   width="746"
                   height="414"
                   class="w-full rounded-t-xl" />
              <h2
                  class="p-4 text-gray-700 bg-white rounded-b-xl min-h-40">
                {{ $quote->quote }}</h2>
            </div>
        @endforeach @else
          <h2 class="mt-12 text-center text-yellow-400">
            @lang('messages.no_movie')</h2>
      </div>
      @endif
    </div>
  </div>
</x-layout>

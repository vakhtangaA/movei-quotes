<x-layout>
  @if ($quote)
    <div
         class="flex flex-col min-h-screen bg- md:flex-row bg-costum-black">
      <x-utils.language-switcher />
      <div
           class="max-w-lg p-4 m-auto text-center text-white lg:max-w-2xl">
        <img src="{{ asset($quote->imagePath) }}"
             width="700"
             height="386"
             class="min-w-full m-auto mb-16 h-96" />
        <blockquote class="mb-32 text-2xl text-white ">
          {{ $quote->quote }}
        </blockquote>
        <a href="{{ route('movie', ['movie' => $quote->movie->id]) }}"
           class="block text-white">
          <h1>{{ $quote->movie->title }}</h1>
        </a>
      </div>
    </div>
  @else
    <x-utils.manifesto />
  @endif
</x-layout>

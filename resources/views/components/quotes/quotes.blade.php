<div role="list"
     class="max-w-2xl divide-y divide-gray-200">
  @foreach ($quotes as $quote)
    <div class="py-4 ">
      <div class="flex items-center mb-4">
        <img class="w-12 h-10 rounded-sm"
             src="{{ asset($quote->imagePath) }}"
             alt="">
        <p class="ml-2 text-gray-600">Movie title: </p>
        <h4 class="ml-1 text-yellow-500">
          {{ strtoupper($quote->movie->title) }}</h4>
      </div>
      <div>
        <p class="text-sm font-medium text-gray-900">
          {{ $quote->quote }}</p>
        <a class="text-sm"
           href="{{ request()->fullUrlWithQuery(['slot' => 'update_quote', 'quoteId' => $quote->id]) }}">edit</a>
        <form action="{{ route('deleteQuote', ['quote' => $quote->id]) }}"
              method="POST"
              class="inline m-4">
          @csrf
          @method('DELETE')
          <button class="text-red-400 underline hover:text-red-700"
                  type="submit">delete</button>
        </form>
      </div>
    </div>
  @endforeach
</div>
<div class="p-4 mt-8 bg-gray-900-400">
  {{ $quotes->appends(request()->input())->links() }}
</div>

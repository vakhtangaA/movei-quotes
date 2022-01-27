<div>
  <form class="h-full max-w-lg m-auto"
        action="{{ route('updateQuote', request()->quoteId) }}"
        method="POST"
        enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <h2 class="mb-2 text-gray-700">
      Update
    </h2>
    <div class="-space-y-px rounded-md shadow-sm isolate">
      <div
           class="relative px-3 py-2 border border-gray-300 rounded-md rounded-b-none focus-within:z-10 focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
        <label for="quote[en]"
               class="block text-lg font-bold text-blue-400">Quote</label>
        <textarea type="text"
                  name="quote[en]"
                  id="quote[en]"
                  class="block w-full p-0 py-2 text-base text-gray-900 placeholder-gray-500 border-0 h-36 focus:ring-0">{{ $quotes->find(request()->get('quoteId'))->getTranslation('quote', 'en') }}</textarea>
      </div>
      <div
           class="relative px-3 py-2 border border-gray-300 rounded-md rounded-t-none focus-within:z-10 focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
        <label for="quote[ka]"
               class="block w-full text-lg font-bold text-blue-400">ციტატა</label>
        <textarea type="text"
                  name="quote[ka]"
                  id="quote[ka]"
                  class="block w-full p-0 py-2 text-base text-gray-900 placeholder-gray-500 border-0 h-36 focus:ring-0">{{ $quotes->find(request()->get('quoteId'))->getTranslation('quote', 'ka') }}</textarea>
        <div class="w-full py-4 border-t border-gray-300">
          <label class="block text-sm font-medium text-gray-700 "
                 for="quote_poster">
            <strong>
              Image/სურათი
            </strong>
          </label>
          <div class="flex items-center mt-1">
            <div class="flex items-center mt-1">
              <input id="quote_poster"
                     type="file"
                     name="quote_poster"
                     required>
            </div>
            <div>
              <p class="mb-2 font-bold text-yellow-600">current image
              </p>
              <img width=110
                   src="{{ asset($quotes->find(request()->get('quoteId'))->imagePath) }}">
            </div>
          </div>
        </div>
      </div>
      <input type="text"
             name="quote_id"
             id="quote_id"
             class="hidden w-full p-0 text-gray-900 placeholder-gray-500 border-0 focus:ring-0 sm:text-sm"
             value="{{ request()->get('quoteId') }}">
    </div>
    <button type="submit"
            class="p-2 mt-8 text-white bg-blue-400 rounded-md">Save
      Quote</button>
  </form>
  @if ($errors->any())
    <div class="mt-8 text-red-600">
      <ul>
        @foreach ($errors->all() as $error)
          <li class="text-center">{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
</div>

<div class="h-full max-w-lg m-auto">
  <form class="flex flex-col max-w-lg m-auto" action="{{ route('createQuote') }}" method="POST"
    enctype="multipart/form-data">
    @csrf
    <div>
      <label for="quote[en]" class="block text-sm font-bold text-gray-700">Quote</label>
      <div class="mt-1 border-b border-gray-300 focus-within:border-indigo-600">
        <input type="text" name="quote[en]" id="quote[en]"
          class="block w-full border-0 border-b border-transparent bg-gray-50 focus:border-indigo-600 focus:ring-0 sm:text-sm">
      </div>
    </div>
    <div class="my-4">
      <label for="quote[ka]" class="block text-sm font-bold text-gray-700">ციტატა</label>
      <div class="mt-1 border-b border-gray-300 focus-within:border-indigo-600">
        <input type="text" name="quote[ka]" id="quote[ka]"
          class="block w-full border-0 border-b border-transparent bg-gray-50 focus:border-indigo-600 focus:ring-0 sm:text-sm">
      </div>
    </div>
    <div class="mt-4">
      <label class="block text-sm font-medium text-gray-700 " for="quote_poster">
        <strong class="mt-12">
          Image/სურათი
        </strong>
      </label>
      <div class="flex items-center mt-1">
        <div class="flex items-center mt-1">
          <input id="quote_poster" type="file" name="quote_poster" required>
        </div>
      </div>
    </div>
    <input type="text" name="movie_id" id="movie_id"
      class="hidden w-full p-0 text-gray-900 placeholder-gray-500 border-0 focus:ring-0 sm:text-sm"
      value="{{ request()->get('id') }}">
    <button type="submit" class="p-2 mt-8 text-white bg-blue-400 rounded-md">Add Quote</button>
  </form>


  @if ($errors->any())
  <div class="mt-4 text-red-600">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
</div>
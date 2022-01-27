<div class="min-h-full p-4 m-auto">
  <div class="p-4 m-auto">
    <form action="{{ route('createMovie') }}" method="POST"
      class="max-w-3xl m-auto mt-32 bg-white shadow-2xl borderrounded-md" enctype="multipart/form-data">
      @csrf
      <div class=" sm:rounded-md sm:overflow-hidden">
        <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
          <div class="grid grid-cols-3 gap-6">
            <div class="col-span-3 sm:col-span-2">
              <label for="title[en]" class="block text-sm font-medium text-gray-700 ">
                Title
              </label>
              <div class="flex mt-1 rounded-md ">
                <input type="text" name="title[en]" id="title[en]"
                  class="flex-1 block w-full border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm"
                  placeholder="title" required />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="sm:rounded-md sm:overflow-hidden">
        <div class="px-4 py-5 bg-white sm:p-6">
          <div class="grid grid-cols-3 gap-6">
            <div class="col-span-3 sm:col-span-2">
              <label for="title[ka]" class="block text-sm font-medium text-gray-700 ">
                <strong>
                  სათაური
                </strong>
              </label>
              <div class="flex mt-1 rounded-md ">
                <input type="text" name="title[ka]" id="title[ka]"
                  class="flex-1 block w-full border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm"
                  placeholder="სათაური" required />
              </div>
            </div>
          </div>

          <div class="mt-20">
            <label class="block text-sm font-medium text-gray-700 " for="movie_poster">
              <strong class="mt-12">
                Image/სურათი
              </strong>
            </label>
            <div class="flex items-center mt-1">
              <div class="flex items-center mt-1">
                <input id="movie_poster" type="file" name="movie_poster" required>
              </div>
            </div>
          </div>


        </div>
        <div class="px-4 py-3 text-right sm:px-6">
          <button type="submit"
            class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Save
          </button>
        </div>
      </div>
  </div>
  </form>
</div>
@if ($errors->any())
<div class="text-red-600">
  <ul>
    @foreach ($errors->all() as $error)
    <li class="text-center">{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
</div>
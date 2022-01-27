<div class="flex flex-col h-full p-4 m-auto ">
  <div class="m-auto overflow-x-auto">
    <div class="inline-block py-2 align-middle sm:px-6">
      <div
           class="bg-gray-300 border-b border-gray-200 shadow sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200 lg:w-1000">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col"
                  class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase ">
                Poster
              </th>
              <th scope="col"
                  class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase ">
                Title
              </th>

              <th scope="col"
                  class="relative px-6 py-3">
                <span class="sr-only">Edit</span>
              </th>
              <th scope="col"
                  class="relative px-6 py-3">
                <span class="sr-only">Delete</span>
              </th>
              <th scope="col"
                  class="relative px-6 py-3">
                <span class="sr-only">Quotes</span>
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($movies as $movie)
              <tr class="h-24">
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    <div class="flex-shrink-0 w-10">
                      <img class="h-10 rounded-full"
                           src="{{ asset($movie->imagePath) }}"
                           alt="" />
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span
                        class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full ">
                    {{ $movie->title }}
                  </span>
                </td>
                <td
                    class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                  <p class="text-blue-900">Quotes -
                    <span class="text-blue-900">
                      {{ $movie->quotes->count() }}
                    </span>
                  </p>
                  <a
                     href="{{ request()->fullUrlWithQuery(['slot' => 'quote', 'id' => $movie->id]) }}">
                    Add quote
                  </a>
                </td>
                <td
                    class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                  <a href="{{ request()->fullUrlWithQuery(['slot' => 'edit', 'id' => $movie->id]) }}"
                     class="text-indigo-600 hover:text-indigo-900">Edit</a>
                </td>
                <td
                    class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                  <form action="{{ route('deleteMovie', [$movie->id]) }}"
                        method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-400 hover:text-red-700"
                            type="submit">Delete</button>
                  </form>
                </td>
              </tr>
            @endforeach
            <!-- More people... -->
          </tbody>
        </table>
        <div class="p-4 mt-8 bg-gray-900-400">
          {{ $movies->appends(request()->input())->links() }}
        </div>
      </div>
    </div>
  </div>
</div>

<x-layout>
  <div class="flex items-center justify-center h-full min-h-full px-4 py-12 sm:px-6 lg:px-8">
    <div class="w-full max-w-md space-y-8">
      <div>
        <img class="w-auto h-12 mx-auto"
             src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
             alt="Workflow" />
        <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900 ">
          Sign in to your account
        </h2>
      </div>
      <form class="mt-8 space-y-6"
            action="{{ route('loginPost') }}"
            method="POST">
        @csrf
        <input type="hidden"
               name="remember"
               value="true" />
        <div class="-space-y-px rounded-md shadow-sm">
          <div>
            <label for="name"
                   class="sr-only">name</label>
            <input id="name"
                   name="name"
                   type="name"
                   autocomplete="name"
                   required
                   class="relative block w-full h-12 px-3 py-2 text-gray-900 placeholder-gray-500 border border-gray-300 rounded-none appearance-none rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                   placeholder="name" />
          </div>
          <div>
            <label for="password"
                   class="sr-only">Password</label>
            <input id="password"
                   name="password"
                   type="password"
                   autocomplete="current-password"
                   required
                   class="relative block w-full h-12 px-3 py-2 text-gray-900 placeholder-gray-500 border border-gray-300 rounded-none appearance-none rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                   placeholder="Password" />
          </div>
        </div>

        <div>
          <button type="submit"
                  class="relative flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md group hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 ">
              <!-- Heroicon name: solid/lock-closed -->
              @include('components.svgs.login-svg')
            </span>
            Sign in
          </button>
        </div>
      </form>
    </div>
  </div>
</x-layout>

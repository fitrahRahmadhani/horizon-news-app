@extends ('layouts.guest')

@section ('content')
  <div class="mx-auto max-w-[1440px]">
    {{-- Breadcrumb --}}
    <x-breadcrumb
      class="my-4 px-8"
      :items="[
          ['label' => 'Home', 'url' => route('home')],
          ['label' => 'Category', 'url' => null],
      ]"
    />

    <div class="flex justify-between items-center px-8">
      <h6 class="text-3xl font-bold">Category</h6>

      <div class="flex justify-end">
        <div
          class="flex items-center rounded-lg border border-gray-200 bg-gray-100 py-2 pl-4 pr-2 transition duration-300 focus-within:border-gray-500 focus-within:ring-2 focus-within:ring-gray-200"
        >
          <input
            type="text"
            placeholder="Type keyword..."
            class="w-full bg-transparent outline-none"
          />

          <button class="ml-2">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="size-5 text-gray-500"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"
              />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <div class="p-8 grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-10">
      {{-- News --}}
      <div class="lg:col-span-2 space-y-6 lg:space-y-8">
        <x-cards.news-card-horizontal />
        <x-cards.news-card-horizontal />
        <x-cards.news-card-horizontal />
      </div>

      {{-- Ads --}}
      <div class="h-[150px] lg:h-[720px] my-4 lg:mt-0 text-center">
        <img
          class="w-full h-full object-cover hidden lg:block"
          src="http://imageipsum.com/800x2000"
          alt="Iklan"
        />
        <img
          class="w-full h-full object-cover block lg:hidden"
          src="http://imageipsum.com/2000x800"
          alt="Iklan"
        />
        <p class="text-xs mt-1 italic text-gray-400">Advertisement</p>
      </div>
    </div>

@endsection

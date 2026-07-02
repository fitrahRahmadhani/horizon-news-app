<header class="w-full" x-data="{ sidebarOpen: false }">
    <div class="w-full bg-gray-100 border-b border-gray-200">
        <div class="max-w-[1440px] mx-auto px-8">
        <!-- Top Header -->
        <div class="h-20 lg:h-24 grid grid-cols-3 items-center">

            <h1 class="hidden lg:block invisible">
                Horizon News
            </h1>

            <img
                src="{{ asset('assets/logos/Horizon News Logo.svg') }}"
                alt="Horizon News Logo"
                class="col-span-2 h-8 md:h-10 lg:h-12 lg:col-span-1 justify-self-start lg:justify-self-center"
            >

            <div class="flex justify-end ">

                <div
                    class="w-[70%] hidden lg:flex items-center rounded-lg border border-gray-300 bg-gray-200 py-2 pl-4 pr-2 transition duration-300
                    focus-within:border-gray-500
                    focus-within:ring-2
                    focus-within:ring-gray-200">

                    <input
                        type="text"
                        placeholder="Type keyword..."
                        class="w-full bg-transparent outline-none"
                    >

                    <button class="ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="size-5 text-gray-500">

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </button>
                </div>

                <button class="self-end lg:hidden text-gray-500 p-1 border border-gray-300 rounded-lg hover:bg-gray-200 hover:text-gray-700 transition duration-300" @click="sidebarOpen = true">
                  <svg xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    class="size-5 text-gray-500">

                    <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M9.94358 2.25C8.10583 2.24998 6.65019 2.24997 5.51098 2.40314C4.33856 2.56076 3.38961 2.89288 2.64124 3.64124C1.89288 4.38961 1.56076 5.33856 1.40314 6.51098C1.24997 7.65019 1.24998 9.10582 1.25 10.9436V13.0564C1.24998 14.8942 1.24997 16.3498 1.40314 17.489C1.56076 18.6614 1.89288 19.6104 2.64124 20.3588C3.38961 21.1071 4.33856 21.4392 5.51098 21.5969C6.65018 21.75 8.1058 21.75 9.94354 21.75H14.0564C14.3706 21.75 14.6738 21.75 14.966 21.7492C14.9773 21.7497 14.9886 21.75 15 21.75C15.0129 21.75 15.0257 21.7497 15.0384 21.749C16.4224 21.7448 17.5607 21.7217 18.489 21.5969C19.6614 21.4392 20.6104 21.1071 21.3588 20.3588C22.1071 19.6104 22.4392 18.6614 22.5969 17.489C22.75 16.3498 22.75 14.8942 22.75 13.0565V10.9436C22.75 9.10585 22.75 7.65018 22.5969 6.51098C22.4392 5.33856 22.1071 4.38961 21.3588 3.64124C20.6104 2.89288 19.6614 2.56076 18.489 2.40314C17.5607 2.27833 16.4224 2.25523 15.0384 2.25096C15.0257 2.25032 15.0129 2.25 15 2.25C14.9886 2.25 14.9773 2.25025 14.966 2.25076C14.6737 2.25 14.3707 2.25 14.0564 2.25H9.94358ZM14.25 3.75002C14.1677 3.75 14.0844 3.75 14 3.75H10C8.09318 3.75 6.73851 3.75159 5.71085 3.88976C4.70476 4.02503 4.12511 4.27869 3.7019 4.7019C3.27869 5.12511 3.02503 5.70476 2.88976 6.71085C2.75159 7.73851 2.75 9.09318 2.75 11V13C2.75 14.9068 2.75159 16.2615 2.88976 17.2892C3.02503 18.2952 3.27869 18.8749 3.7019 19.2981C4.12511 19.7213 4.70476 19.975 5.71085 20.1102C6.73851 20.2484 8.09318 20.25 10 20.25H14C14.0844 20.25 14.1677 20.25 14.25 20.25L14.25 3.75002ZM15.75 20.2443C16.7836 20.2334 17.6082 20.2018 18.2892 20.1102C19.2952 19.975 19.8749 19.7213 20.2981 19.2981C20.7213 18.8749 20.975 18.2952 21.1102 17.2892C21.2484 16.2615 21.25 14.9068 21.25 13V11C21.25 9.09318 21.2484 7.73851 21.1102 6.71085C20.975 5.70476 20.7213 5.12511 20.2981 4.7019C19.8749 4.27869 19.2952 4.02503 18.2892 3.88976C17.6082 3.79821 16.7836 3.76662 15.75 3.75573L15.75 20.2443Z" />
                  </svg>
                </button>
            </div>
        </div>
    </div>
    </div>
    
    <div class="max-w-[1440px] hidden lg:block bg-white mx-auto px-4 lg:px-8">
        <!-- Navigation -->
        <nav class="flex items-center border-b border-gray-300">

            <ul class="flex w-full justify-center-safe gap-10 text-sm">
                <li class="border-b text-gray-700 border-gray-700 p-3">Home</li>
                <li class="p-3 text-gray-500 hover:text-gray-700 hover:border-b hover:border-gray-500 transition duration-300">Economy</li>
                <li class="p-3 text-gray-500 hover:text-gray-700 hover:border-b hover:border-gray-500 transition duration-300">Business</li>
                <li class="p-3 text-gray-500 hover:text-gray-700 hover:border-b hover:border-gray-500 transition duration-300">World</li>
                <li class="p-3 text-gray-500 hover:text-gray-700 hover:border-b hover:border-gray-500 transition duration-300">National</li>
                <li class="p-3 text-gray-500 hover:text-gray-700 hover:border-b hover:border-gray-500 transition duration-300">Sport</li>
                <li class="p-3 text-gray-500 hover:text-gray-700 hover:border-b hover:border-gray-500 transition duration-300">Tech</li>
                <li class="p-3 text-gray-500 hover:text-gray-700 hover:border-b hover:border-gray-500 transition duration-300">Lifestyle</li>
            </ul>

        </nav>
    </div>

    {{-- Side bar --}}
    <div
        x-show="sidebarOpen"
        @click.outside="sidebarOpen = false"
        x-transition:enter="transition transform duration-300 ease-out"
        x-transition:enter-start="translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition transform duration-300 ease-in"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full"

        class="fixed top-0 right-0 z-50 h-screen w-60 bg-gray-100 border-l border-gray-300 shadow-xl p-4 flex flex-col gap-8"

        style="display: none;"
    >

        <!-- Tombol Close -->
        <button
            @click="sidebarOpen = false"
            class="self-end text-gray-500 p-1 border border-gray-300 rounded-lg hover:bg-gray-200 hover:text-gray-700 transition">

            <svg xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="size-6">

                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M6 18L18 6M6 6l12 12" />
            </svg>

        </button>

        <!-- Menu -->
        <ul class="flex flex-col gap-2">

            <li class="py-2 px-4 rounded-lg bg-gray-200 text-gray-700">
                Home
            </li>

            <li class="py-2 px-4 rounded-lg hover:bg-gray-200 transition">
                Economy
            </li>

            <li class="py-2 px-4 rounded-lg hover:bg-gray-200 transition">
                Business
            </li>

            <li class="py-2 px-4 rounded-lg hover:bg-gray-200 transition">
                World
            </li>

            <li class="py-2 px-4 rounded-lg hover:bg-gray-200 transition">
                National
            </li>

            <li class="py-2 px-4 rounded-lg hover:bg-gray-200 transition">
                Sport
            </li>

            <li class="py-2 px-4 rounded-lg hover:bg-gray-200 transition">
                Tech
            </li>

            <li class="py-2 px-4 rounded-lg hover:bg-gray-200 transition">
                Lifestyle
            </li>

        </ul>

        <!-- Search -->
        <div
            class="flex items-center rounded-lg border border-gray-300 bg-gray-200 py-2 pl-4 pr-2
            focus-within:border-gray-500
            focus-within:ring-2
            focus-within:ring-gray-200">

            <input
                type="text"
                placeholder="Type keyword..."
                class="w-full bg-transparent outline-none">

            <button class="ml-2">

                <svg xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-5 text-gray-500">

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />

                </svg>
            </button>
        </div>
    </div>
</header>

@push('scripts')
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endpush
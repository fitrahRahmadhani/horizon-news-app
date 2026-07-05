<section class="w-full mb-4">
  <form
    action=""
    class="max-w-[1440px] mx-auto p-8">
      <div class="w-full flex flex-col lg:grid lg:grid-cols-3 items-center gap-6 p-6 lg:p-8 bg-gray-100 rounded-xl">

        {{-- Text --}}
        <div class="col-span-2 text-center lg:text-left">
          <p class="text-gray-600 mb-2 text-sm lg:text-base">Insights Worth Following</p>
          <h6 class="font-bold text-2xl md:text-3xl lg:text-4xl text-gray-800">
            Subscribe and receive
            <br class="hidden md:block">
            our latest updates in your inbox.
          </h6>
        </div>

        {{-- Input & Button --}}
        <div class="w-full flex flex-col sm:flex-row justify-center gap-2">
            <div
                class="w-full flex items-center rounded-lg border border-gray-300 bg-gray-200 py-2 pl-4 pr-2 transition duration-300
                focus-within:border-gray-500
                focus-within:ring-2
                focus-within:ring-gray-200">

                <input
                    type="email"
                    placeholder="Type your email..."
                    class="w-full bg-transparent outline-none text-sm"
                >
            </div>

            <button class="rounded-lg bg-gray-700 px-6 py-2 text-gray-50 text-sm whitespace-nowrap hover:bg-gray-800 transition duration-300">
              Subscribe
            </button>
        </div>

      </div>
  </form>
</section>
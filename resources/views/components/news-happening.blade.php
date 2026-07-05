<section class="w-full">
  <div class="max-w-[1440px] mx-auto p-8">
    <div class="w-full flex items-center justify-between my-4">
      <h5 class="font-bold text-3xl">Happenings Today</h5>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-10">
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
        >
        <img
          class="w-full h-full object-cover block lg:hidden"
          src="http://imageipsum.com/2000x800"
          alt="Iklan"
        >
        <p class="text-xs mt-1 italic text-gray-400">Advertisement</p>
      </div>

    </div>
  </div>
</section>
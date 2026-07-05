<section class="w-full">
  <div class="max-w-[1440px] mx-auto p-8">
    <div class="w-full flex items-center justify-between my-4">
      <h5 class="font-bold text-3xl">Sports</h5>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-10">
      <div class="h-fit lg:h-[720px] rounded-xl bg-gray-100 p-6">
        <h6 class="text-xl font-semibold text-center mt-2 mb-4">Latest Football Match</h6>

        {{-- Match Card List --}}
        <div class="space-y-6">
          <x-cards.match-card />
          <x-cards.match-card />
          <x-cards.match-card />
          <a href="" class="block font-bold hover:underline text-center">Show More</a>
        </div>
      </div>

      {{-- News --}}
      <div class="lg:col-span-2 space-y-6 lg:space-y-8">
        <x-cards.news-card-horizontal />
        <x-cards.news-card-horizontal />
        <x-cards.news-card-horizontal />
      </div>

    </div>
  </div>
</section>
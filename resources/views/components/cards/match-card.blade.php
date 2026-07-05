<div class="bg-white rounded-lg border border-gray-300 p-4">
  <div class="w-full pb-3 border-b border-gray-300">
    <img
      class="h-[28px] mx-auto"
      src="{{ asset('assets/sports/La-Liga-logo.png') }}"
      alt="La Liga">
  </div>

  <div class="grid grid-cols-3 items-center pt-4">
    {{-- Team 1 --}}
    <div class="flex flex-col items-center gap-2">
      <img class="h-[56px] w-[56px] object-contain" src="{{ asset('assets/sports/osasuna.png') }}" alt="Osasuna">
      <p class="text-center text-sm font-medium">Osasuna</p>
    </div>

    {{-- Score / VS --}}
    <div class="flex flex-col items-center gap-1">
      <p class="text-3xl font-bold">2 - 1</p>
      <p class="text-xs text-gray-400">FT</p>
    </div>

    {{-- Team 2 --}}
    <div class="flex flex-col items-center gap-2">
      <img class="h-[56px] w-[56px] object-contain" src="{{ asset('assets/sports/getafe.png') }}" alt="Getafe">
      <p class="text-center text-sm font-medium">Getafe</p>
    </div>
  </div>
</div>
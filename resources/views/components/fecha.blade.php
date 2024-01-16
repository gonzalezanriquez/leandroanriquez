<div class="min-w-32 bg-white min-h-48 p-3 mb-4 font-medium">
    <div class="w-32 flex-none rounded-t lg:rounded-t-none lg:rounded-l text-center shadow-lg ">
      <div class="block rounded-t overflow-hidden  text-center ">
        <div class="bg-amber-500  text-white py-1">
          {{ $nombreDia}}
        </div>
        <div class="pt-1 border-l border-r border-white bg-white">
          <span class="text-5xl font-bold leading-tight">
          {{ $dateTime->format('d') }}
          </span>
        </div>
        <div class="border-l border-r border-b rounded-b-lg text-center border-white bg-white -pt-2 -mb-1">
          <span class="text-sm">
            {{ $dateTime->format('l') }}
          </span>
        </div>
        <div class="pb-2 border-l border-r border-b rounded-b-lg text-center border-white bg-white">
          <span class="text-xs leading-normal" id=""> {{ $dateTime->format('H:i') }} hs
          </span>
        </div>
      </div>
    </div>
  </div> 





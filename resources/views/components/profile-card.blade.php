<!-- component -->
<div class="">

    <div class="">
        <div class="bg-white">
            <div class="photo-wrapper pt-6">
                <img class="w-24 h-24 rounded-full mx-auto radius border border-gray-200" src="{{asset('img/genericUser.svg')}}" alt="">
            </div>
            <div class="pt-2">

                <div class="text-center text-xs text-gray-400 text-s font-semibold">
                   <p>{{ auth()->user()->name }} {{ auth()->user()->lastname }}</p>
                   <p>{{ auth()->user()->email }}</p>

                </div>


                <div class="mt-4 flex flex-col items-center gap-4 sm:mt-0 sm:flex-row sm:justify-center pt-5">
                    <a href={{ route('profile.edit') }}>
                      <button class="inline-flex items-center justify-center gap-1 rounded-lg border border-gray-200 bg-white px-3 py-2 text-gray-500 transition hover:text-gray-700 focus:outline-none focus:ring" type="button">
                        <span class="text-sm font-medium"> Editar Perfil </span>
                        <x-heroicon-o-plus-circle class="w-4 h-4" stroke-width="1"/>
                      </button>
                    </a>
                  </div>
                  
                
                
                {{-- <div class="text-center my-3">
                    
                    <a class="inline-flex px-2 py-1 text-xs  leading-5 text-black bg-amber-400  rounded hover:bg-amber-500" href="{{route('profile.edit')}}">Editar Perfil</a>
                </div> --}}
    
            </div>
        </div>
    </div>
    
    </div>

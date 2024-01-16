<x-dash-layout title="Mi Tarjeta Personalizada">


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                  Hola <span class="font-bold">{{ $user->name }}</span>, te damos la Bienvenida


                </div>

                <div>


                    <div class="grid grid-cols-1 gap-6 mt-6 md:grid-cols-2 lg:grid-cols-4">
                        @include('components.profile-card')
                        <!-- Users chart card --><a href="#" class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">  
                          <div class="flex items-start">
                          
                          </div>
                        </a>

                        </div>
                    {{-- <div class="flex mb-4">
                        <div class="w-1/4 bg-gray-500 ">@include('components.profile-card')</div>
                        <div class="w-1/4 bg-gray-400 "></div>
                        <div class="w-1/4 bg-gray-500 "></div>
                        <div class="w-1/4  object-none object-centerco">  @include('components.fecha')</div>
                      </div> --}}
                      
                     
                  
                </div>
            </div>
        </div>
    </div>
</x-dash-layout>

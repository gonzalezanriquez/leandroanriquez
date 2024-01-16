<x-dash-layout title="Mi Tarjeta Personalizada">


    <div class="py-12">
        
        <div class=" mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div>
                    <div class="grid grid-cols-1 gap-6  md:grid-cols-2 lg:grid-cols-4">
                        @include('components.profile-card')
                       

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dash-layout>

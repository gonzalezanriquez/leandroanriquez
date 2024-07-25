<x-dash-layout>
<header class="bg-gray-50">
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
      <div class="sm:flex sm:items-center sm:justify-between">
        <div class="flex items-center justify-center sm:justify-start text-center sm:text-left">
            <x-heroicon-o-rectangle-group class="w-10 h-10 mr-3" stroke-width="1" />
            <div>
                <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">Te damos la Bienvenida, {{ auth()->user()->name }}! 👋</h1>
                <p class="mt-1.5 text-sm text-gray-500">Aquí podrás encontrar todo lo que necesitas para la gestión de tu secretaria.</p>
            </div>
        </div>
  
        <div class="mt-4 flex flex-col gap-4 sm:mt-0 sm:flex-row sm:items-center">
         <a href={{ route('users.index') }}> <button class="inline-flex items-center justify-center gap-1.5 rounded-lg border border-gray-200 bg-white px-5 py-3 text-gray-500 transition hover:text-gray-700 focus:outline-none focus:ring" type="button">
            <span class="text-sm font-medium"> Crear nuevo Usuario </span>
            <x-heroicon-o-plus-circle class="w-4 h-4" stroke-width="1"/>
          </button></a>        
        </div>
      </div>
    </div>
  </header>
  <x-cantidad-usuarios />

{{-- <x-CantidadUsuarios :cantidadUsuarios="$cantidadUsuarios" />  --}}
    
    <!-- ====== Cards Section Start -->
    <section class="bg-gray-2 dark:bg-dark pb-10  ">
        <div class="container mx-auto">
            <div class="flex flex-wrap -mx-2">
                
                <div class="w-full px-4 md:w-1/2 xl:w-1/3 ">
                    <div class="mb-10 overflow-hidden duration-300 bg-white rounded-lg dark:bg-dark-2 shadow-1 hover:shadow-3 dark:shadow-card dark:hover:shadow-3 shadow-md">
                        <img src="https://cdn.tailgrids.com/2.0/image/application/images/cards/card-01/image-01.jpg"
                            alt="image" class="w-full" />
                        <div class="p-8 text-center sm:p-9 md:p-7 xl:p-9">
                            <h3>
                                <a href="javascript:void(0)" class="text-dark dark:text-white hover:text-primary mb-4 block text-xl font-semibold sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px]">
                                   {{$user->name}}
                                </a>
                            </h3>
                            <p class="text-base leading-relaxed text-body-color dark:text-dark-6 mb-7">
                                Lorem ipsum dolor sit amet pretium consectetur adipiscing
                                elit. Lorem consectetur adipiscing elit.
                            </p>
                            <a href="javascript:void(0)" class="inline-block py-2 text-base font-medium transition border rounded-full text-body-color hover:border-primary hover:bg-primary border-gray-3 px-7 hover:text-white dark:border-dark-3 dark:text-dark-6">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 md:w-1/2 xl:w-1/3">
                    <div
                        class="mb-10 overflow-hidden duration-300 bg-white rounded-lg dark:bg-dark-2 shadow-1 hover:shadow-3 dark:shadow-card dark:hover:shadow-3">
                        <img src="https://cdn.tailgrids.com/2.0/image/application/images/cards/card-01/image-02.jpg"
                            alt="image" class="w-full" />
                        <div class="p-8 text-center sm:p-9 md:p-7 xl:p-9">
                            <h3>
                                <a href="javascript:void(0)"
                                    class="text-dark dark:text-white hover:text-primary mb-4 block text-xl font-semibold sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px]">
                                    The ultimate UX and UI guide to card design
                                </a>
                            </h3>
                            <p class="text-base leading-relaxed text-body-color mb-7">
                                Lorem ipsum dolor sit amet pretium consectetur adipiscing
                                elit. Lorem consectetur adipiscing elit.
                            </p>
                            <a href="javascript:void(0)"
                                class="inline-block py-2 text-base font-medium transition border rounded-full text-body-color hover:border-primary hover:bg-primary border-gray-3 px-7 hover:text-white dark:border-dark-3 dark:text-dark-6">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 xl:w-1/3">
                    <div
                        class="mb-10 overflow-hidden duration-300 bg-white rounded-lg dark:bg-dark-2 shadow-1 hover:shadow-3 dark:shadow-card dark:hover:shadow-3">
                        <img src="https://cdn.tailgrids.com/2.0/image/application/images/cards/card-01/image-03.jpg"
                            alt="image" class="w-full" />
                        <div class="p-8 text-center sm:p-9 md:p-7 xl:p-9">
                            <h3>
                                <a href="javascript:void(0)"
                                    class="text-dark dark:text-white hover:text-primary mb-4 block text-xl font-semibold sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px]">
                                    Creative Card Component designs graphic elements
                                </a>
                            </h3>
                            <p class="text-base leading-relaxed text-body-color mb-7">
                                Lorem ipsum dolor sit amet pretium consectetur adipiscing
                                elit. Lorem consectetur adipiscing elit.
                            </p>
                            <a href="javascript:void(0)"
                                class="inline-block py-2 text-base font-medium transition border rounded-full text-body-color hover:border-primary hover:bg-primary border-gray-3 px-7 hover:text-white dark:border-dark-3 dark:text-dark-6">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
</x-dash-layout>

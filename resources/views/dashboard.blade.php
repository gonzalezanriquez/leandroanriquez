<x-dash-layout>


  

<header class="bg-gray-50">
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
      <div class="sm:flex sm:items-center sm:justify-between">
        <div class="text-center sm:text-left">
          <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">  Te damos la Bienvenida, {{ auth()->user()->name }}! 👋</h1>
  
          <p class="mt-1.5 text-sm text-gray-500">Aqui podras encotrar todo lo que necesitas para la gestion de tu secretaria.</p>
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
{{-- STADISTICAS --}}
   
      

<x-CantidadUsuarios :cantidadUsuarios="$cantidadUsuarios" /> 






    
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
    <!-- ====== Cards Section End -->




    {{-- 
    <div class="py-12">
        
        <div class=" mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div>
                    <div class="grid grid-cols-1 gap-6  md:grid-cols-2 lg:grid-cols-4">
                        <div class="relative flex flex-col mt-6 text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">
                            <div
                              class="relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                              <img
                                src="https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80"
                                alt="card-image" />
                            </div>
                            <div class="p-6">
                              <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                UI/UX Review Check
                              </h5>
                              <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                                The place is close to Barceloneta Beach and bus stop just 2 min by walk
                                and near to "Naviglio" where you can enjoy the main night life in
                                Barcelona.
                              </p>
                            </div>
                            <div class="p-6 pt-0">
                              <button
                                class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                                type="button">
                                Read More
                              </button>
                            </div>
                          </div>  
                       

                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</x-dash-layout>

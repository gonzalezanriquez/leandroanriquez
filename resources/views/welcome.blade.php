<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />



</head>

<body>

    <nav class="bg-red-900 shadow fixed top-0 w-full z-10 py-4">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button id="navbar-toggle" type="button"
                        class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-red-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex flex-shrink-0 items-center">
                        <a href="{{ url('/') }}">
                            <img class="h-8 w-auto" src="{{ asset('img/gelogo.png') }}" alt="Your Company">
                        </a>
                    </div>
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <a href="#" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white"
                                aria-current="page">Dashboard</a>
                            <a href="#"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-red-700 hover:text-white">Team</a>
                            <a href="#"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-red-700 hover:text-white">Projects</a>
                            <a href="#"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-red-700 hover:text-white">Calendar</a>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <button type="button"
                        class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">View notifications</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                        </svg>
                    </button>
                    <!-- Profile dropdown -->
                    <div class="relative ml-3">
                        <div>
                            <button id="user-menu-button" type="button"
                                class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full"
                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                            </button>
                        </div>
                        <div id="user-menu"
                            class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                            tabindex="-1">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                tabindex="-1" id="user-menu-item-0">Your Profile</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                tabindex="-1" id="user-menu-item-1">Settings</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                tabindex="-1" id="user-menu-item-2">Sign out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2">
                <a href="#" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white"
                    aria-current="page">Dashboard</a>
                <a href="#"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-red-700 hover:text-white">Team</a>
                <a href="#"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-red-700 hover:text-white">Projects</a>
                <a href="#"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-red-700 hover:text-white">Calendar</a>
            </div>
        </div>
    </nav>







    <main class="mt-5">


        <div class="container-fluid bgheader py-5">
            <div class="container ">
                <div class="row mx-md-5 align-items-center text -xs-center  ">
                    <div class="col-12 col-lg-6 px-lg-3 pt-lg-4">
                        <h1 class="titulo animate__animated animate__fadeInDown">Soluciones integrales para tus <span
                                class="highlight ::after">gestiones escolares</span></h1>
                        <p class="bajadaTitulo mt-5 animate__animated animate__fadeIn">Te ayudamos a sistematizar todas
                            tus labores administrativas escolares
                            brindando una respuesta rapida y sencilla a docentes, alumnos y personal escolar. </p>
                    </div>
                    <div class="col-12 col-md-6">
                        <img class="img-fluid animate__animated animate__fadeInRight"
                            src="{{ asset('img/app2.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>



        <!-- TARJETAS PRESENTACIONES -->
        <section class="my-5">
            <div class="container mx-auto">
                <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-10">CUALIDADES</h2>
                <div class="flex flex-wrap justify-center gap-4">

                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="{{ asset('img/1.jpg') }}" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">EFICAZ</div>
                            <p class="text-gray-700 text-base">
                                Creemos en una solución eficaz e integral, que logre abordar tanto las necesidades del
                                alumno, del docente así como también y la dirección académica todo en un mismo espacio.
                            </p>
                        </div>
                    </div>

                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="{{ asset('img/2.jpg') }}" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">VIRTUAL</div>
                            <p class="text-gray-700 text-base">
                                Digitalizar los procesos administrativos escolares. Establecer un punto de comunicación
                                digital Alumno - Institución - docente. Brindar información académica general.
                            </p>
                        </div>
                    </div>

                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="{{ asset('img/3.jpg') }}" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">ADAPTABLE</div>
                            <p class="text-gray-700 text-base">
                                Armado de estructuras inteligentes y dinámicas para una organización clara y eficiente.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </section>


        <!-- TESTIMONIO -->
        
        <!-- NOSOTROS -->

        <section class="my-5">

            <div class="container mx-auto">
                <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-10">NOSOTROS</h2>
                <div class="flex flex-wrap justify-center gap-4">

                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="{{ asset('img/leandro.jpg') }}" alt="Sunset in the mountains">
                        <div class="">
                            <div class="font-bold text-xl mb-2">Leandro Gonzalez Anriquez</div>
                            <p class="text-gray-700 text-base">
                                Founder &amp; Frontend Developer
                            </p>
                        </div>
                    </div>

                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="{{ asset('img/kevin.jpg') }}" alt="Sunset in the mountains">
                        <div class="">
                            <div class="font-bold text-xl mb-2">Kevin Hercog</div>
                            <p class="text-gray-700 text-base">
                                Founder &amp; Backend Developer
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>





    </main>
    {{-- <section class="">
            

            <div class="quote reveal">
                <div class="container py-5">
                    <div class="bg-red-800 text-white p-5 rounded-lg">
                        <blockquote class="px-5 mx-lg-5">
                            <p>"La tecnología nos brinda herramientas para enfatizar el enfoque en el verdadero proceso que se encuentra en las aulas y en el aprendizaje. Que la burocracia no debe ser un obstáculo y tenemos que usar todas las herramientas necesarias para ello."</p>
                        </blockquote>
                    </div>
                    <div class="quoteAutor text-white mt-3">Fernando Gaitan - Director de Proyectos Web - Davinci</div>
                </div>
            </div>
        </section> --}}



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var navbarToggle = document.getElementById('navbar-toggle');
            var mobileMenu = document.getElementById('mobile-menu');
            var userMenuButton = document.getElementById('user-menu-button');
            var userMenu = document.getElementById('user-menu');

            navbarToggle.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });

            userMenuButton.addEventListener('click', function() {
                userMenu.classList.toggle('hidden');
            });
        });
    </script>

</body>

</html>

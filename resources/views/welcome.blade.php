<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


    <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />



</head>

<body>
    <div class="relative overflow-hidden before:absolute before:top-0 before:start-1/2 before:bg-[url('https://preline.co/assets/svg/examples/polygon-bg-element.svg')] dark:before:bg-[url('https://preline.co/assets/svg/examples-dark/polygon-bg-element.svg')] before:bg-no-repeat before:bg-top before:bg-cover before:size-full before:-z-[1] before:transform before:-translate-x-1/2">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-10">
            <div class="mt-5 max-w-2xl text-center mx-auto">
              <img class="mx-auto w-60 h-auto" src="{{asset('img/gelogo.png')}}" alt="Logo">
              <h1 class="block font-bold text-gray-800 text-4xl md:text-5xl lg:text-6xl dark:text-neutral-200">
                Soluciones integrales para tus
                <span class="bg-clip-text bg-gradient-to-tl from-amber-400 to-amber-600 text-transparent">gestiones
                  educativas</span>
              </h1>
            </div>
            

            <div class="mt-5 max-w-3xl text-center mx-auto">
                <p class="text-lg text-gray-600 dark:text-neutral-400">Te ayudamos a sistematizar todas tus labores
                    administrativas escolares brindando una respuesta rápida y sencilla a docentes, alumnos y personal
                    escolar.</p>
            </div>

            <div class="mt-8 gap-3 flex justify-center">
                <a class="inline-flex justify-center items-center gap-x-3 text-center bg-gradient-to-tl from-amber-400 to-amber-500 hover:from-amber-600 hover:to-amber-600 border border-transparent text-white text-sm font-medium rounded-md focus:outline-none focus:from-amber-600 focus:to-amber-600 py-3 px-4"
                    href="{{route('login')}}">
                    Iniciar Sesion
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </a>

            </div>

            <div class="mt-5 flex justify-center items-center gap-x-1 sm:gap-x-3">

                <svg class="size-5 text-gray-300 dark:text-neutral-600" width="16" height="16"
                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round" />
                </svg>

            </div>
        </div>
    </div>

    <main>
        <!-- CARACTERISTICAS -->
        <div class="max-w-[85rem] px-4 my-py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto ">
            <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
                <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">CARACTERISTICAS</h2>
                <p class="mt-1 text-gray-600 dark:text-neutral-400">Amplia experiencia en el mundo de la tecnologia</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="group flex flex-col focus:outline-none">
                    <div class="relative pt-[50%] sm:pt-[70%] rounded-xl overflow-hidden shadow-xl">
                        <img class="absolute inset-0 object-cover w-full h-full transition-transform duration-500 ease-in-out rounded-xl group-hover:scale-105 group-focus:scale-105"
                            src="{{ asset('img/eficaz.jpg') }}" alt="Blog Image">
                        <span
                            class="absolute top-0 end-0 rounded-se-xl rounded-es-xl text-xs font-medium bg-gray-800 text-white py-1.5 px-3 dark:bg-neutral-900">
                            EFICAZ
                        </span>
                    </div>
                    <div class="mt-7 text-center ">
                        <h3
                            class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-neutral-300 dark:group-hover:text-white">
                            EFICAZ
                        </h3>
                        <p class="mt-3 text-xl text-gray-500 dark:text-neutral-200">
                            Creemos en una solución eficaz e integral, que logre abordar tanto las necesidades del
                            alumno, del docente así como también y la dirección académica todo en un mismo espacio.</p>

                    </div>
                </div>

                <div class="group flex flex-col focus:outline-none">
                    <div class="relative pt-[50%] sm:pt-[70%] rounded-xl overflow-hidden shadow-xl">
                        <img class="absolute inset-0 object-cover w-full h-full transition-transform duration-500 ease-in-out rounded-xl group-hover:scale-105 group-focus:scale-105"
                            src="{{ asset('img/virtual.jpg') }}" alt="Blog Image">
                        <span
                            class="absolute top-0 end-0 rounded-se-xl rounded-es-xl text-xs font-medium bg-gray-800 text-white py-1.5 px-3 dark:bg-neutral-900">
                            VIRTUAL
                        </span>
                    </div>
                    <div class="mt-7 text-center ">
                        <h3
                            class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-neutral-300 dark:group-hover:text-white">
                            VIRTUAL
                        </h3>
                        <p class="mt-3 text-xl text-gray-500 dark:text-neutral-200">
                            Digitalizar los procesos administrativos escolares. Establecer un punto de comunicación
                            digital Alumno - Institución - docente. Brindar información académica general.</p>

                    </div>
                </div>

                <div class="group flex flex-col focus:outline-none">
                    <div class="relative pt-[50%] sm:pt-[70%] rounded-xl overflow-hidden shadow-xl">
                        <img class="absolute inset-0 object-cover w-full h-full transition-transform duration-500 ease-in-out rounded-xl group-hover:scale-105 group-focus:scale-105"
                            src="{{ asset('img/segura.jpg') }}" alt="Blog Image">
                        <span
                            class="absolute top-0 end-0 rounded-se-xl rounded-es-xl text-xs font-medium bg-gray-800 text-white py-1.5 px-3 dark:bg-neutral-900">
                            SEGURA
                        </span>
                    </div>
                    <div class="mt-7 text-center ">
                        <h3
                            class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-neutral-300 dark:group-hover:text-white">
                            SEGURA
                        </h3>
                        <p class="mt-3 text-xl text-gray-500 dark:text-neutral-200">
                            La protección de los datos de nuestros clientes es nuestra prioridad. Cada información
                            cuenta con medidas de seguridad para que sea resguardada de la mejor manera para la
                            tranquilidad de nuestros clientes.
                        </p>

                    </div>

                </div>
            </div>




            <!-- TESTIMONIO -->

            <div class="relative overflow-hidden shadow-xl my-10 w-full bg-amber-400 rounded-xl ">
                <div class="w-full px-4 py-8 sm:px-6 lg:px-8 lg:py-16">
                    <div aria-hidden="true" class="flex -z-[1] absolute start-0 w-full">
                        <div class="bg-amber-400   w-full h-[400px]">
                        </div>
                    </div>
                    <div class="lg:grid lg:grid-cols-6 lg:gap-8 lg:items-center">
                        <div class="hidden lg:block lg:col-span-2">
                            <img class="rounded-xl w-full" src="{{ asset('img/app2.png') }}" alt="Avatar">
                        </div>
                        <div class="lg:col-span-4">
                            <blockquote>
                                <p
                                    class="text-xl font-medium text-gray-800 lg:text-2xl lg:leading-normal dark:text-neutral-200">
                                    La tecnología nos brinda herramientas para enfatizar el enfoque en el verdadero
                                    proceso que se encuentra en las aulas y en el aprendizaje. Que la burocracia no debe
                                    ser un obstáculo y tenemos que usar todas las herramientas necesarias para ello.
                                </p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>




            <!-- NOSOTROS -->



            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
                    <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">NOSOTROS</h2>
                    <p class="mt-1 text-gray-600 dark:text-neutral-400">Nuestro Equipo Creativo</p>
                </div>

                <div class="flex justify-center">
                    <div class="grid sm:grid-cols-2 lg:grid-cols-2 gap-6">
                        <div class="group flex flex-col focus:outline-none">
                            <div
                                class="relative pt-[50%] sm:pt-[70%] rounded-xl overflow-hidden shadow-xl hover:shadow-2xl transition-shadow duration-500">
                                <img class="absolute inset-0 object-cover w-full h-full transition-transform duration-500 ease-in-out rounded-xl group-hover:scale-105 group-focus:scale-105"
                                    src="{{ asset('img/leandro.jpg') }}" alt="Blog Image">
                            </div>
                            <div class="mt-7 text-center">
                                <h3
                                    class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-neutral-300 dark:group-hover:text-white">
                                    LEANDRO GONZALEZ ANRIQUEZ
                                </h3>
                                <p class="mt-3 text-gray-800 dark:text-neutral-200">
                                    Founder &amp; Frontend Developer &amp; Backend Developer
                                </p>
                            </div>
                        </div>

                        <div class="group flex flex-col focus:outline-none">
                            <div
                                class="relative pt-[50%] sm:pt-[70%] rounded-xl overflow-hidden shadow-xl hover:shadow-2xl transition-shadow duration-500">
                                <img class="absolute inset-0 object-cover w-full h-full transition-transform duration-500 ease-in-out rounded-xl group-hover:scale-105 group-focus:scale-105"
                                    src="{{ asset('img/kevin.jpg') }}" alt="Blog Image">
                            </div>
                            <div class="mt-7 text-center">
                                <h3
                                    class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-neutral-300 dark:group-hover:text-white">
                                    KEVIN HERCOG
                                </h3>
                                <p class="mt-3 text-gray-800 dark:text-neutral-200">
                                    Founder &amp; Backend Developer
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>







            </section>


    </main>


    <!-- ========== FOOTER ========== -->
    <footer class="mt-auto w-full max-w py-10 px-4 sm:px-6 lg:px-8 mx-auto bg-gray-200">
        <!-- Grid -->
        <div class="text-center">
            <div>
                <p class="flex-none text-xl font-semibold text-black dark:text-white" aria-label="Brand">Codificando
                    Ideas</p>

            </div>

            <div class="">
                <p class="text-gray-500 dark:text-neutral-500">© Codificando Ideas. 2024. Todos los derechos
                    reservados.</p>
            </div>
        </div>
    </footer>
    <!-- ========== END FOOTER ========== -->


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

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.1/datatables.min.js"></script>



</body>

</html>

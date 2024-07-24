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
    {{-- 
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
    </nav> --}}

    <nav
        class="flex-no-wrap relative flex w-full items-center justify-between bg-zinc-50 py-2 shadow-dark-mild dark:bg-neutral-700 lg:flex-wrap lg:justify-start lg:py-4">
        <div class="flex w-full flex-wrap items-center justify-between px-3">
            <!-- Hamburger button for mobile view -->
            <button
                class="block border-0 bg-transparent px-2 text-black/50 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"
                type="button" data-twe-collapse-init data-twe-target="#navbarSupportedContent1"
                aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                <!-- Hamburger icon -->
                <span class="[&>svg]:w-7 [&>svg]:stroke-black/50 dark:[&>svg]:stroke-neutral-200">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
            </button>

            <!-- Collapsible navigation container -->
            <div class="!visible hidden flex-grow basis-[100%] items-center lg:!flex lg:basis-auto"
                id="navbarSupportedContent1" data-twe-collapse-item>
                <!-- Logo -->
                <a class="mb-4 me-5 ms-2 mt-3 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:mb-0 lg:mt-0"
                    href="#">
                    <img src="https://tecdn.b-cdn.net/img/logo/te-transparent-noshadows.webp" style="height: 15px"
                        alt="TE Logo" loading="lazy" />
                </a>
                <!-- Left navigation links -->
                <ul class="list-style-none me-auto flex flex-col ps-0 lg:flex-row" data-twe-navbar-nav-ref>
                    <li class="mb-4 lg:mb-0 lg:pe-2" data-twe-nav-item-ref>
                        <!-- Dashboard link -->
                        <a class="text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2"
                            href="#" data-twe-nav-link-ref>Dashboard</a>
                    </li>
                    <!-- Team link -->
                    <li class="mb-4 lg:mb-0 lg:pe-2" data-twe-nav-item-ref>
                        <a class="text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2"
                            href="#" data-twe-nav-link-ref>Team</a>
                    </li>
                    <!-- Projects link -->
                    <li class="mb-4 lg:mb-0 lg:pe-2" data-twe-nav-item-ref>
                        <a class="text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2"
                            href="#" data-twe-nav-link-ref>Projects</a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>

            <!-- Right elements -->
            <div class="relative flex items-center">
                <!-- Icon -->
                <a class="me-4 text-neutral-600 dark:text-white" href="#">
                    <span class="[&>svg]:w-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
                        </svg>
                    </span>
                </a>

                <!-- First dropdown container -->
                <div class="relative" data-twe-dropdown-ref data-twe-dropdown-alignment="end">
                    <!-- First dropdown trigger -->
                    <a class="me-4 flex items-center text-neutral-600 dark:text-white" href="#"
                        id="dropdownMenuButton1" role="button" data-twe-dropdown-toggle-ref aria-expanded="false">
                        <!-- Dropdown trigger icon -->
                        <span class="[&>svg]:w-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        <!-- Notification counter -->
                        <span
                            class="absolute -mt-4 ms-2.5 rounded-full bg-danger px-[0.35em] py-[0.15em] text-[0.6rem] font-bold leading-none text-white">1</span>
                    </a>
                    <!-- First dropdown menu -->
                    <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark"
                        aria-labelledby="dropdownMenuButton1" data-twe-dropdown-menu-ref>
                        <!-- First dropdown menu items -->
                        <li>
                            <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                                href="#" data-twe-dropdown-item-ref>Action</a>
                        </li>
                        <li>
                            <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                                href="#" data-twe-dropdown-item-ref>Another action</a>
                        </li>
                        <li>
                            <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                                href="#" data-twe-dropdown-item-ref>Something else here</a>
                        </li>
                    </ul>
                </div>

                <!-- Second dropdown container -->
                <div class="relative" data-twe-dropdown-ref data-twe-dropdown-alignment="end">
                    <!-- Second dropdown trigger -->
                    <a class="flex items-center whitespace-nowrap transition duration-150 ease-in-out motion-reduce:transition-none"
                        href="#" id="dropdownMenuButton2" role="button" data-twe-dropdown-toggle-ref
                        aria-expanded="false">
                        <!-- User avatar -->
                        <img src="https://tecdn.b-cdn.net/img/new/avatars/2.jpg" class="rounded-full"
                            style="height: 25px; width: 25px" alt="" loading="lazy" />
                    </a>
                    <!-- Second dropdown menu -->
                    <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark"
                        aria-labelledby="dropdownMenuButton2" data-twe-dropdown-menu-ref>
                        <!-- Second dropdown menu items -->
                        <li>
                            <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                                href="#" data-twe-dropdown-item-ref>Action</a>
                        </li>
                        <li>
                            <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                                href="#" data-twe-dropdown-item-ref>Another action</a>
                        </li>
                        <li>
                            <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                                href="#" data-twe-dropdown-item-ref>Something else here</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Right elements -->
        </div>
    </nav>

<!-- Hero -->
<div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 mt-5">
  <!-- Grid -->
  <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center">
    <div>
      <h1 class="block text-3xl font-bold text-gray-800 sm:text-4xl lg:text-6xl lg:leading-tight dark:text-white">Soluciones Integrales para tus <span class="text-amber-400">gestiones escolares</span></h1>
      <p class="mt-3 text-lg text-gray-800 dark:text-neutral-400">Te ayudamos a sistematizar todas
        tus labores administrativas escolares
        brindando una respuesta rapida y sencilla a docentes, alumnos y personal escolar.</p>

      {{-- <!-- Buttons -->
      <div class="mt-7 grid gap-3 w-full sm:inline-flex">
        <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
          Get started
          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
        </a>
        <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
          Contact sales team
        </a>
      </div> --}}
      <!-- End Buttons -->

    </div>

    <div class="relative ms-4">
      <img class="w-full rounded-md" src="{{asset('img/app2.png')}}" alt="Hero Image">
      <div class="absolute inset-0 -z-[1] bg-gradient-to-tr from-gray-200 via-white/0 to-white/0 size-full rounded-md mt-4 -mb-4 me-4 -ms-4 lg:mt-6 lg:-mb-6 lg:me-6 lg:-ms-6 dark:from-neutral-800 dark:via-neutral-900/0 dark:to-neutral-900/0"></div>

    </div>
    <!-- End Col -->
  </div>
  <!-- End Grid -->
</div>
<!-- End Hero -->


    {{-- HERO --}}
    <main>
        {{-- <div class="container-fluid bgheader py-5">
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
        </div> --}}

        <!-- CARACTERISTICAS -->
        <div class="max-w-[85rem] px-4 my-py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto ">
            <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
                {{-- <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">CARACTERISTICAS</h2>
                <p class="mt-1 text-gray-600 dark:text-neutral-400">Amplia experiencia en el mundo de la tecnologia</p> --}}
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
          <div class="w-full px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
              <div aria-hidden="true" class="flex -z-[1] absolute start-0 w-full">
                  <div class="bg-amber-400   w-full h-[400px]">
                  </div>
              </div>
              <div class="lg:grid lg:grid-cols-6 lg:gap-8 lg:items-center">
                  <div class="hidden lg:block lg:col-span-2">
                      <img class="rounded-xl w-full"
                          src="{{asset('img/app2.png')}}"
                          alt="Avatar">
                  </div>
                  <div class="lg:col-span-4">
                      <blockquote>
                          <p class="text-xl font-medium text-gray-800 lg:text-2xl lg:leading-normal dark:text-neutral-200">
                              La tecnología nos brinda herramientas para enfatizar el enfoque en el verdadero proceso que se encuentra en las aulas y en el aprendizaje. Que la burocracia no debe ser un obstáculo y tenemos que usar todas las herramientas necesarias para ello.
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
                      <div class="relative pt-[50%] sm:pt-[70%] rounded-xl overflow-hidden shadow-xl hover:shadow-2xl transition-shadow duration-500">
                          <img class="absolute inset-0 object-cover w-full h-full transition-transform duration-500 ease-in-out rounded-xl group-hover:scale-105 group-focus:scale-105"
                              src="{{ asset('img/leandro.jpg') }}" alt="Blog Image">
                      </div>
                      <div class="mt-7 text-center">
                          <h3 class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-neutral-300 dark:group-hover:text-white">
                              LEANDRO GONZALEZ ANRIQUEZ
                          </h3>
                          <p class="mt-3 text-gray-800 dark:text-neutral-200">
                              Founder &amp; Frontend Developer &amp; Backend Developer
                          </p>
                      </div>
                  </div>
      
                  <div class="group flex flex-col focus:outline-none">
                      <div class="relative pt-[50%] sm:pt-[70%] rounded-xl overflow-hidden shadow-xl hover:shadow-2xl transition-shadow duration-500">
                          <img class="absolute inset-0 object-cover w-full h-full transition-transform duration-500 ease-in-out rounded-xl group-hover:scale-105 group-focus:scale-105"
                              src="{{ asset('img/kevin.jpg') }}" alt="Blog Image">
                      </div>
                      <div class="mt-7 text-center">
                          <h3 class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-neutral-300 dark:group-hover:text-white">
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
      













        {{-- <section class="mt-10 ">

            <div class="container mx-auto">
                <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-10">NOSOTROS</h2>
                <div class="flex flex-wrap justify-center gap-4">

                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="{{ asset('img/leandro.jpg') }}" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Leandro Gonzalez Anriquez</div>
                            <p class="text-gray-700 text-base">
                                Founder &amp; Frontend Developer & Backend Developer
                            </p>
                        </div>
                    </div>

                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="{{ asset('img/kevin.jpg') }}" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Kevin Hercog</div>
                            <p class="text-gray-700 text-base">
                                Founder &amp; Backend Developer
                            </p>
                        </div>
                    </div>
                </div>
            </div> --}}
        </section>


{{-- CONTACTO --}}{{--       
        <div
            class="relative flex-[1_auto] flex flex-col break-words min-w-0 bg-clip-border rounded-xl border border-dashed border-stone-200 bg-white mb-5 draggable">
            <!-- card body  -->
            <div class="flex-auto block py-8 px-9">
                <form action="#" method="post" class="group/form">
                    <div class="flex flex-col mb-9">
                        <h1 class="font-semibold text-3xl text-dark mb-2 font-display">Contact Us</h1>
                        <span class="text-lg font-medium text-muted block"> Feel free to reach out to us with any
                            questions or inquiries. We'll be happy to assist you! </span>
                    </div>
                    <div class="flex flex-wrap mb-5 -mx-3">
                        <div class="w-1/2 px-3">
                            <label class="inline-block mb-2 text-[1.15rem] font-medium text-dark" for="Name"> Full
                                Name </label>
                            <input type="text" name="Name" id="Name" value=""
                                class="peer w-full px-4 py-3 text-base/normal rounded-xl font-medium block transition-colors duration-200 ease-in-out bg-secondary-light focus:bg-secondary/40 text-stone-500 border focus:outline-none"
                                placeholder="Enter your full name" required="">
                        </div>
                        <div class="w-1/2 px-3">
                            <label class="inline-block mb-2 text-[1.15rem] font-medium text-dark" for="Email">
                                Email Address </label>
                            <input type="email" name="Email" id="Email"
                                class="peer w-full px-4 py-3 text-base/normal rounded-xl font-medium block transition-colors duration-200 ease-in-out bg-secondary-light focus:bg-secondary/40 text-stone-500 border focus:outline-none"
                                placeholder="Enter your email address" required="">
                        </div>
                    </div>
                    <div class="w-full mb-5">
                        <label class="inline-block mb-2 text-[1.15rem] font-medium text-dark" for="Subject"> Subject
                        </label>
                        <input type="text" name="Subject" id="Subject"
                            class="w-full px-4 py-3 text-base/normal rounded-xl font-medium block transition-colors duration-200 ease-in-out bg-secondary-light focus:bg-secondary/40 text-stone-500 border focus:outline-none"
                            placeholder="Enter the subject">
                    </div>
                    <div class="w-full mb-10">
                        <label class="inline-block mb-2 text-[1.15rem] font-medium text-dark" for="Message"> Message
                        </label>
                        <textarea rows="6" type="text" name="Message" id="Message"
                            class="w-full px-4 py-3 text-base/normal rounded-xl font-medium block transition-colors duration-200 ease-in-out bg-secondary-light focus:bg-secondary/40 text-stone-500 border focus:outline-none"
                            placeholder="Enter your message"></textarea>
                    </div>
                    <div class="text-end">
                        <button
                            class="inline-block text-base font-medium leading-normal text-center align-middle cursor-pointer rounded-xl transition-colors duration-150 ease-in-out text-white bg-dark shadow-none border-0 px-5 py-4 hover:bg-dark-dark active:bg-dark-dark focus:bg-dark-dark ms-auto"
                            type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </div> --}}



    
    </main>


    <!-- ========== FOOTER ========== -->
<footer class="mt-auto w-full max-w py-10 px-4 sm:px-6 lg:px-8 mx-auto bg-gray-200">
  <!-- Grid -->
  <div class="text-center">
    <div>
      <p class="flex-none text-xl font-semibold text-black dark:text-white"  aria-label="Brand">Codificando Ideas</p>

    </div>

    <div class="">
      <p class="text-gray-500 dark:text-neutral-500">© Codificando Ideas. 2024. Todos los derechos reservados.</p>
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




</body>

</html>

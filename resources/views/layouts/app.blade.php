<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">

    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    
    <body class="font-sans antialiased">
    
    
    
        <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200 font-roboto">
            @include('layouts.sidebar') 
            
            <div class="flex-1 flex flex-col overflow-hidden">
                @include('layouts.header')
    
                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                    <div class="container mx-auto px-6 py-8">
                      
                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>
    
    
    
    
    
    {{-- 
    
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    
            @livewire('side-bar')
    
    
            <main> --}}
               
    
    
    
    
    
                {{-- <div class="min-h-screen flex items-center justify-center">
                    <nav class="bg-gray-800">
                        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                            <div class="relative flex h-16 items-center justify-between">
                                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                                    <button type="button"
                                        class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                                        aria-controls="mobile-menu" aria-expanded="false">
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
                                        <img class="h-8 w-auto"
                                            src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
                                            alt="Your Company">
                                    </div>
                                    <div class="hidden sm:ml-6 sm:block">
                                        <div class="flex space-x-4">
                                            <a href="#"
                                                class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium"
                                                aria-current="page">Dashboard</a>
                                            <a href="#"
                                                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Team</a>
                                            <a href="#"
                                                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Projects</a>
                                            <a href="#"
                                                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Calendar</a>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                                    <button type="button"
                                        class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                                        <span class="absolute -inset-1.5"></span>
                                        <span class="sr-only">View notifications</span>
                                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                                        </svg>
                                    </button>
    
                                    <div class="relative ml-3">
                                        <div>
                                            <button type="button"
                                                class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                                <span class="absolute -inset-1.5"></span>
                                                <span class="sr-only">Open user menu</span>
                                                <img class="h-8 w-8 rounded-full"
                                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                    alt="">
                                            </button>
                                        </div>
    
                                       
                                        <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
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
                                <a href="#"
                                    class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium"
                                    aria-current="page">Dashboard</a>
                                <a href="#"
                                    class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>
                                <a href="#"
                                    class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
                                <a href="#"
                                    class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
                            </div>
                        </div>
                    </nav>
    
                    <div class="flex flex-col bg-white rounded p-4 w-full max-w-xs">
                        <div class="font-bold text-xl">Sydney</div>
                        <div class="text-sm text-gray-500">Thursday 10 May 2020</div>
                        <div
                            class="mt-6 text-6xl self-center inline-flex items-center justify-center rounded-lg text-indigo-400 h-24 w-24">
                            <svg class="w-32 h-32" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z">
                                </path>
                            </svg>
                        </div>
                        <div class="flex flex-row items-center justify-center mt-6">
                            <div class="font-medium text-6xl" id="current-time"></div>
                            <div class="flex flex-col items-center ml-6">
                                <div>Cloudy</div>
                                <div class="mt-1">
                                    <span class="text-sm"><i class="far fa-long-arrow-up"></i></span>
                                    <span class="text-sm font-light text-gray-500" id="current-time"></span>
                                </div>
                                <div>
                                    <span class="text-sm"><i class="far fa-long-arrow-down"></i></span>
                                    <span class="text-sm font-light text-gray-500">20°C</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row justify-between mt-6">
                            <div class="flex flex-col items-center">
                                <div class="font-medium text-sm">Wind</div>
                                <div class="text-sm text-gray-500">9k/h</div>
                            </div>
                            <div class="flex flex-col items-center">
                                <div class="font-medium text-sm">Humidity</div>
                                <div class="text-sm text-gray-500">68%</div>
                            </div>
                            <div class="flex flex-col items-center">
                                <div class="font-medium text-sm">Visibility</div>
                                <div class="text-sm text-gray-500">10km</div>
                            </div>
                        </div>
                    </div>
                </div> --}}
    
             
    
                {{-- <div class="sm:ml-64">
                    @include('layouts.navigation')
    
                    <div class="">
    
                         
    
                        {{ $slot }}
    
                    </div>
    
    
                </div>
        </div>
    
        </main>
        </div> --}}
        @livewireScripts
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    
    
        <script>
            // JavaScript para mostrar la hora y minutos actuales
            function mostrarHora() {
                const ahora = new Date();
                const horas = ahora.getHours();
                const minutos = ahora.getMinutes();
    
                // Formatea los minutos para que siempre tengan dos dígitos
                const minutosFormateados = minutos < 10 ? `0${minutos}` : minutos;
    
                // Muestra la hora y minutos en el formato deseado
                document.getElementById('current-time').textContent = ` ${horas}:${minutosFormateados}`;
            }
    
            // Llama a la función cada segundo para mantener la hora actualizada
            setInterval(mostrarHora, 1000);
    
            // Muestra la hora actual al cargar la página
            mostrarHora();
        </script>
    
    </body>
    
    </html>
    
</body>

</html>

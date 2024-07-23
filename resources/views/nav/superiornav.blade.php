{{-- <nav class="bg-white shadow fixed top-0 w-full z-10 py-4">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-20">
            <div class="flex-shrink-0">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('img/gelogo.png') }}" alt="" class="h-20">
                </a>
            </div>
            <div class="block lg:hidden">
                <button class="text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700" id="navbar-toggle">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
            <div class="w-full lg:flex lg:items-center lg:w-auto hidden" id="navbar-content">
                <div class="text-sm lg:flex-grow">

                </div>
                <div>
                    <ul class="flex items-center space-x-4">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="text-gray-700 hover:text-gray-900" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="relative">
                                <button id="user-menu-button" class="flex text-gray-700 hover:text-gray-900 items-center">
                                    {{ Auth::user()->name }}
                                    <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                                <div id="user-menu" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 hidden">
                                    <a href="{{ route('logout') }}"
                                       class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav> --}}

<header class="sticky inset-0 z-50 border-b border-slate-100 bg-white/80 backdrop-blur-lg">
    <nav class="mx-auto flex max-w-6xl gap-8 px-6 transition-all duration-200 ease-in-out lg:px-12 py-2">
        <div class="relative flex items-center">
            <a href="/">
                {{-- <img src="{{ asset('img/gelogo.png') }}" alt="" class="h-20"> --}}
                <img  src="{{ asset('img/gelogo.png') }}" loading="lazy" style="color:transparent" class="h-20"></a>
        </div>
        <ul class="hidden items-center justify-center gap-6 md:flex">
            <li class="pt-1.5 font-dm text-sm font-medium text-slate-700">
                <a href="#">Pricing</a>
            </li>
            <li class="pt-1.5 font-dm text-sm font-medium text-slate-700">
                <a href="#">Blog</a>
            </li>
            <li class="pt-1.5 font-dm text-sm font-medium text-slate-700">
                <a href="#">Docs</a>
            </li>
        </ul>
        <div class="flex-grow"></div>
        <div class="hidden items-center justify-center gap-6 md:flex">
            <a href="#" class="font-dm text-sm font-medium text-slate-700">Sign in</a>
            <a href="#"
                class="rounded-md bg-gradient-to-br from-green-600 to-emerald-400 px-3 py-1.5 font-dm text-sm font-medium text-white shadow-md shadow-green-400/50 transition-transform duration-200 ease-in-out hover:scale-[1.03]">Sign
                up for free
            </a>
        </div>
        <div class="relative flex items-center justify-center md:hidden">
            <button type="button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-6 w-auto text-slate-900"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path></svg>
            </button>
        </div>
    </nav>
</header>
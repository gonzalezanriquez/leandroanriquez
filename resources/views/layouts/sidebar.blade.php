<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
    type="button"
    class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Abrir sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button>

<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-72 h-screen transition-transform -translate-x-full sm:translate-x-0 shadow-md bg-white " aria-label="Sidebar">
   
    <a href="{{ route('profile.edit') }}">
        <div class="flex flex-col items-center mt-10 px-4">
            @if (Auth::check() && Auth::user()->avatar)
                <img class="h-16 w-auto max-w-full align-middle rounded" src="{{ Auth::user()->avatar }}" alt="Avatar de {{ Auth::user()->name }}" />
            @else
                <img class="h-16 w-auto max-w-full align-middle rounded" src="{{ asset('img/genericUser.svg') }}" alt="Avatar de {{ Auth::user()->name }}" />
            @endif
            <div class="flex flex-col items-center mt-3">
                <h3 class="font-medium">{{ auth()->user()->name }}</h3>
                <p class="text-xs text-gray-500">{{ auth()->user()->email }}</p>
            </div>
        </div>
    </a>
    
    <div class="pt-6 mt-4 flex flex-col gap-4 sm:mt-0 sm:flex-row sm:items-center justify-center">
        <a href="{{ route('profile.edit') }}">
            <button class="inline-flex items-center justify-center gap-1.5 rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm text-gray-500 transition hover:text-gray-700 focus:outline-none focus:ring">
                <x-heroicon-o-pencil class="w-5 h-4" stroke-width="1"/>
                <span class="font-medium">Editar perfil</span>
            </button>
        </a>
    </div>
    
    
    

    <ul class="space-y-2 font-medium px-6 pt-6">
        <div class="py-4 mb-2">
            <h5 class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">Navegacion</h5>
        </div>
        <li>
            <a href="{{ route('dashboard') }}"
                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white group 
                {{ Request::is('dashboard') ? 'bg-gray-200 dark:bg-amber-400' : 'hover:bg-gray-200 dark:hover:bg-gray-200' }}">
                <x-heroicon-o-rectangle-group class="w-6 h-6" stroke-width="1" />
                <span class="ms-3">Inicio</span>
            </a>
        </li>
        @can('admin') 
        <li>
            <a href="{{ route('users.index') }}"
                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white group 
                {{ Request::is('users') ? 'bg-gray-200 dark:bg-amber-400' : 'hover:bg-gray-200 dark:hover:bg-gray-200' }}">
                <x-heroicon-o-user-plus class="w-6 h-6" stroke-width="1" />
                <span class="ms-3">Usuarios</span>
            </a>
        </li>
    @endcan
      

        <li>
            <a href="{{ route('users.index') }}"
                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white group 
                {{ Request::is('users') ? 'bg-gray-200 dark:bg-amber-400' : 'hover:bg-gray-200 dark:hover:bg-gray-200' }}">
                <x-heroicon-o-user-plus class="w-6 h-6" stroke-width="1" />
                <span class="ms-3">Usuarios</span>
            </a>
        </li>

        <li>
            <a href="{{ route('estudiantes.index') }}"
                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white group 
                {{ Request::is('estudiantes') ? 'bg-gray-200 dark:bg-amber-400' : 'hover:bg-gray-200 dark:hover:bg-gray-200' }}">
                <x-heroicon-o-user-group class="w-6 h-6" stroke-width="1" />
                <span class="ms-3">Estudiantes</span>
            </a>
        </li>
    
        <li>
            <a href="{{ route('docente.index') }}"
                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white group 
                {{ Request::is('docente') ? 'bg-gray-200 dark:bg-amber-400' : 'hover:bg-gray-200 dark:hover:bg-gray-200' }}">
                <x-heroicon-o-academic-cap class="w-6 h-6" stroke-width="1" />
                <span class="ms-3">Docentes</span>
            </a>
        </li>

        
        <li>
            <a href="{{ route('roles.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white group 
                {{ Request::is('roles') ? 'bg-gray-200 dark:bg-amber-400' : 'hover:bg-gray-200 dark:hover:bg-gray-200' }}">
                <x-heroicon-o-lock-open class="w-6 h-6" stroke-width="1" /> 
                <span class="ms-3">Roles</span>
            </a>
        </li>
        
        <li>
            <a href="{{ route('ciclolectivos.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white group 
                {{ Request::is('ciclolectivos') ? 'bg-gray-200 dark:bg-amber-400' : 'hover:bg-gray-200 dark:hover:bg-gray-200' }}">
                <x-heroicon-o-calendar-days class="w-6 h-6" stroke-width="1" /> 
                <span class="ms-3">Ciclos Lectivos</span>
            </a>
        </li>

        <li>
            <a href="{{ route('museos.index') }}"
                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white group 
                {{ Request::is('museos') ? 'bg-gray-200 dark:bg-amber-400' : 'hover:bg-gray-200 dark:hover:bg-gray-200' }}">
                <x-heroicon-o-book-open class="w-6 h-6" stroke-width="1" />
                <span class="ms-3">Museos</span>
                <span class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">conexion API</span>

            </a>
        </li>
        <li>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="flex items-center p-2 text-red-950 rounded-lg dark:text-white group 
                      {{ Request::is('Logout') ? 'bg-amber-400 dark:bg-amber-400' : 'hover:bg-gray-200 dark:hover:bg-gray-200' }}">
                <x-heroicon-o-arrow-left-start-on-rectangle class="w-6 h-6" stroke-width="1" />
                <span class="ms-3">Logout</span>
            </a>
            <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                @csrf
            </form>
        </li>

    </ul>

</aside>

<div class="px-10 pt-6 sm:ml-64">
    <div class="p-6 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
        {{ $slot }}
    </div>
</div>

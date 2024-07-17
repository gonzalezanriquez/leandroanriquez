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

<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-72 h-screen transition-transform -translate-x-full sm:translate-x-0 shadow-md bg-white sm:bg-transparent" aria-label="Sidebar">
    <div class="flex mt-10 items-center px-4">
        @if(Auth::check() && Auth::user()->avatar)
            <img class="h-16 w-auto max-w-full align-middle rounded" src="{{ Auth::user()->avatar }}" alt="Avatar de {{ Auth::user()->name }}" />
        @else
            <img class="h-16 w-auto max-w-full align-middle rounded" src="{{ asset('img/genericUser.svg') }}" alt="Avatar de {{ Auth::user()->name}}" />
        @endif
        <div class="flex ml-3 flex-col">
            <h3 class="font-medium">{{ auth()->user()->name }}</h3>
            <p class="text-xs text-gray-500">{{ auth()->user()->email }}</p>
        </div>
    </div>
    <ul class="space-y-2 font-medium px-6 pt-6">

        <li>
            <a href="{{ route('dashboard') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white group 
                {{ Request::is('dashboard') ? 'bg-gray-200 dark:bg-amber-400' : 'hover:bg-gray-200 dark:hover:bg-gray-200' }}">
                <x-heroicon-o-presentation-chart-bar class="w-6 h-6" stroke-width="1"/>
                <span class="ms-3">Inicio</span>
            </a>
        </li>
        
        <li>
            <a href="{{ route('users.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white group 
                {{ Request::is('users') ? 'bg-gray-200 dark:bg-amber-400' : 'hover:bg-gray-200 dark:hover:bg-gray-200' }}">
                <x-heroicon-o-user-plus class="w-6 h-6" stroke-width="1"/>
                <span class="ms-3">Usuarios</span>
            </a>
        </li>
        
        <li>
            <a href="{{ route('estudiante.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white group 
                {{ Request::is('estudiante') ? 'bg-gray-200 dark:bg-amber-400' : 'hover:bg-gray-200 dark:hover:bg-gray-200' }}">
                <x-heroicon-o-user-group class="w-6 h-6" stroke-width="1"/>
                <span class="ms-3">Estudiantes</span>
            </a>
        </li>
        
        <li>
            <a href="{{ route('docente.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white group 
                {{ Request::is('docente') ? 'bg-gray-200 dark:bg-amber-400' : 'hover:bg-gray-200 dark:hover:bg-gray-200' }}">
                <x-heroicon-o-academic-cap class="w-6 h-6" stroke-width="1"/>
                <span class="ms-3">Docentes</span>
            </a>
        </li>
        
        <li>
            <a href="{{ route('museos.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white group 
                {{ Request::is('materia') ? 'bg-gray-200 dark:bg-amber-400' : 'hover:bg-gray-200 dark:hover:bg-gray-200' }}">
                <x-heroicon-o-book-open class="w-6 h-6" stroke-width="1"/>
                <span class="ms-3">Museos</span>
            </a>
        </li>
        
        <li>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
               class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white group 
                      {{ Request::is('materia') ? 'bg-gray-200 dark:bg-amber-400' : 'hover:bg-gray-200 dark:hover:bg-gray-200' }}">
                <x-heroicon-o-arrow-left-start-on-rectangle class="w-6 h-6" stroke-width="1"/>
                <span class="ms-3">Logout</span>
            </a>
            <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                @csrf
            </form>
        </li>
        
    </ul>
</aside>

<div class="p-6 sm:ml-64">
    <div class="p-6 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
        {{ $slot }}
    </div>
</div>

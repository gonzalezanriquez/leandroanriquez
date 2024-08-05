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

<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-72 h-screen transition-transform -translate-x-full sm:translate-x-0 shadow-md bg-white overflow-y-auto overflow-x-hidden" aria-label="Sidebar">
   
<div class="flex flex-col items-center mt-10 px-2">
        <a href="{{ route('profile.edit') }}" class="flex items-center space-x-4">
            @if (Auth::check() && Auth::user()->avatar)
                <img class="h-16 w-16 rounded-full" src="{{ Auth::user()->avatar }}" alt="Avatar de {{ Auth::user()->nombre }}" />
            @else
                <img class="h-16 w-16 rounded-full" src="{{ asset('img/genericUser.svg') }}" alt="Avatar de {{ Auth::user()->nombre }}" />
            @endif
            <div class="flex flex-col items-center sm:items-start">
                <h3 class="font-medium">{{ auth()->user()->nombre }} {{ auth()->user()->apellido }}</h3>
                <p class="text-xs text-gray-500">{{ auth()->user()->email }}</p>
            </div>
        </a>
    </div>

    <div class="pt-6 mt-4 flex justify-center">
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
        @role(['admin'])

        <li x-data="{ open: false }">
            <button @click="open = !open" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white group hover:bg-gray-200 dark:hover:bg-gray-200 w-full text-left">
                <x-heroicon-o-user-plus class="w-6 h-6" stroke-width="1" />
                <span class="ms-3">Usuarios</span>
                <svg class="w-4 h-4 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <ul x-show="open" class="pl-8 mt-1 space-y-1">
                <li><a href="{{ route('users.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white group {{ Request::is('users') ? 'bg-gray-200 dark:bg-amber-400' : 'hover:bg-gray-200 dark:hover:bg-gray-200' }}">Usuarios</a></li>
                <li><a href="{{ route('estudiantes.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white group {{ Request::is('estudiantes') ? 'bg-gray-200 dark:bg-amber-400' : 'hover:bg-gray-200 dark:hover:bg-gray-200' }}">Estudiantes</a></li>
                <li><a href="{{ route('docente.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white group {{ Request::is('docente') ? 'bg-gray-200 dark:bg-amber-400' : 'hover:bg-gray-200 dark:hover:bg-gray-200' }}">Docentes</a></li>
                <li><a href="{{ route('roles.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white group {{ Request::is('roles') ? 'bg-gray-200 dark:bg-amber-400' : 'hover:bg-gray-200 dark:hover:bg-gray-200' }}">Roles</a></li>
            </ul>
        </li>

        <li>
       
        
        <li x-data="{ open: false }">
            <button @click="open = !open" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white group hover:bg-gray-200 dark:hover:bg-gray-200 w-full text-left">
                <x-heroicon-o-calendar-days class="w-6 h-6" stroke-width="1" />
                <span class="ms-3">Ciclos Lectivos</span>
                <svg class="w-4 h-4 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <ul x-show="open" class="pl-8 mt-1 space-y-1">
                <li><a href="{{ route('ciclolectivos.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white group {{ Request::is('ciclolectivos') ? 'bg-gray-200 dark:bg-amber-400' : 'hover:bg-gray-200 dark:hover:bg-gray-200' }}">Ciclos Lectivos</a></li>
                <li><a href="{{ route('cursos.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white group {{ Request::is('cursos') ? 'bg-gray-200 dark:bg-amber-400' : 'hover:bg-gray-200 dark:hover:bg-gray-200' }}">Cursos</a></li>
            </ul>
        </li>
        <li x-data="{ open: false }">
            <button @click="open = !open" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white group hover:bg-gray-200 dark:hover:bg-gray-200 w-full text-left">
                <x-heroicon-o-newspaper class="w-6 h-6" stroke-width="1" />
                <span class="ms-3">Noticias</span>
                <svg class="w-4 h-4 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <ul x-show="open" class="pl-8 mt-1 space-y-1">
                <li><a href="{{ route('noticias.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white group {{ Request::is('noticias') ? 'bg-gray-200 dark:bg-amber-400' : 'hover:bg-gray-200 dark:hover:bg-gray-200' }}">Creación Noticias</a></li>
                <li><a href="{{ route('noticias.noticias') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white group {{ Request::is('news') ? 'bg-gray-200 dark:bg-amber-400' : 'hover:bg-gray-200 dark:hover:bg-gray-200' }}">Noticias</a></li>
            </ul>
        </li>
        
     
        <li>
            <a href="{{ route('contact.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white group 
                {{ Request::is('contact') ? 'bg-gray-200 dark:bg-amber-400' : 'hover:bg-gray-200 dark:hover:bg-gray-200' }}">
                <x-heroicon-o-paper-airplane class="w-6 h-6" stroke-width="1" /> 
                <span class="ms-3">Mensajes </span>
            </a>
        </li>
        <li x-data="{ open: false }">
            <button @click="open = !open" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white group hover:bg-gray-200 dark:hover:bg-gray-200 w-full text-left">
                <x-heroicon-o-clipboard-document-check class="w-6 h-6" stroke-width="1" />
                <span class="ms-3">Documentacion</span>
                <svg class="w-4 h-4 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <ul x-show="open" class="pl-8 mt-1 space-y-1">
                <li><a href="{{ route('constancia.form') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white group {{ Request::is('constancia') ? 'bg-gray-200 dark:bg-amber-400' : 'hover:bg-gray-200 dark:hover:bg-gray-200' }}">Constancias Alumno Regular</a></li>
            </ul>
        </li>
        <li>
            <a href="{{ route('museos.index') }}"
                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white group 
                {{ Request::is('museos') ? 'bg-gray-200 dark:bg-amber-400' : 'hover:bg-gray-200 dark:hover:bg-gray-200' }}">
                <x-heroicon-o-book-open class="w-6 h-6" stroke-width="1" />
                <span class="ms-3">Museos</span>
                <span class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-amber-400 rounded-full dark:bg-gray-700 dark:text-gray-300">API</span>

            </a>
        </li>
      
       
        @endrole

        @role(['estudiante', 'docentes', 'familiares'])
        <li>
            <a href="{{ route('noticias.noticias') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white group 
                {{ Request::is('news') ? 'bg-gray-200 dark:bg-amber-400' : 'hover:bg-gray-200 dark:hover:bg-gray-200' }}">
                <x-heroicon-o-newspaper class="w-6 h-6" stroke-width="1" /> 
                <span class="ms-3">Noticias</span>
            </a>
        </li>
        <li>
            <a href="{{ route('museos.index') }}"
                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white group 
                {{ Request::is('museos') ? 'bg-gray-200 dark:bg-amber-400' : 'hover:bg-gray-200 dark:hover:bg-gray-200' }}">
                <x-heroicon-o-book-open class="w-6 h-6" stroke-width="1" />
                <span class="ms-3">Museos</span>
                <span class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-amber-400 rounded-full dark:bg-gray-700 dark:text-gray-300">API</span>

            </a>
        </li>
        @endrole

        
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

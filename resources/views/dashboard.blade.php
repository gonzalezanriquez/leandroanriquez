<x-dash-layout >
    {{-- @include('components.profile-card') --}}



<div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="flex justify-end px-4 pt-4">
        <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
            <span class="sr-only">Open dropdown</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
            </svg>
        </button>
        <!-- Dropdown menu -->
        <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2" aria-labelledby="dropdownButton">
            <li>
                <a href="{{route('profile.edit')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Editar Perfil</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Export Data</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
            </li>
            </ul>
        </div>
    </div>
    <div class="flex flex-col items-center pb-10">
        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="https://www.gravatar.com/avatar/2acfb745ecf9d4dccb3364752d17f65f?s=260&d=mp" alt="Bonnie image"/>
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $user->name }} {{ $user->lastname }}</h5>
        <span class="text-sm text-gray-500 dark:text-gray-400">{{ $user->email }} </span>
        <div class="flex mt-4 md:mt-6">
            <a href="{{route('profile.edit')}}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Editar Perfil</a>
           
        </div>
    </div>

    @php
    // Get the current month and year
    $month = date('n');
    $year = date('Y');

    // Get the number of days in the current month
    $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);

    // Get the first day of the month
    $firstDay = date('N', strtotime("{$year}-{$month}-01"));
@endphp

<div class="p-4 bg-white shadow-lg rounded-2xl dark:bg-gray-700">
    <div class="flex flex-wrap overflow-hidden">
        <div class="w-full rounded shadow-sm">
            <div class="flex items-center justify-between mb-4">
                <div class="text-xl font-bold text-left text-black dark:text-white">
                    {{ date('M Y') }}
                </div>
            </div>
            <div class="-mx-2">
                <table class="w-full dark:text-white">
                    <!-- Add your table rows and cells here based on the $firstDay and $daysInMonth variables -->
                    <!-- Use PHP loops to generate the calendar days -->
                    <!-- Example: -->
                    @for ($i = 1; $i <= $daysInMonth; $i++)
                        @if ($i == 1 || ($i == 1 && $firstDay == 7))
                            <tr>
                        @endif

                        <td class="px-2 py-3 text-center cursor-pointer md:px-3 hover:text-blue-500">
                            {{ $i }}
                        </td>

                        @if (($i + $firstDay - 1) % 7 == 0 || $i == $daysInMonth)
                            </tr>
                        @endif
                    @endfor
                </table>
            </div>
        </div>
    </div>
</div>


</div>
<x-CantidadUsuarios :cantidadUsuarios="$cantidadUsuarios" />







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

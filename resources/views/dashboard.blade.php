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
{{-- <div class="flex items-center justify-center py-8 px-4">
    <div class="max-w-sm w-full shadow-lg">
        <div class="md:p-8 p-5 dark:bg-gray-800 bg-white rounded-t">
            <div class="px-4 flex items-center justify-between">
                <span tabindex="0" class="focus:outline-none text-base font-bold dark:text-gray-100 text-gray-800" id="month-year"></span>
                <div class="flex items-center">
                    <button aria-label="calendar backward" id="prev-month" class="focus:text-gray-400 hover:text-gray-400 text-gray-800 dark:text-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <polyline points="15 6 9 12 15 18" />
                        </svg>
                    </button>
                    <button aria-label="calendar forward" id="next-month" class="focus:text-gray-400 hover:text-gray-400 ml-3 text-gray-800 dark:text-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <polyline points="9 6 15 12 9 18" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="flex items-center justify-between pt-12 overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr>
                            <th>
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Mo</p>
                                </div>
                            </th>
                            <th>
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Tu</p>
                                </div>
                            </th>
                            <th>
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">We</p>
                                </div>
                            </th>
                            <th>
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Th</p>
                                </div>
                            </th>
                            <th>
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Fr</p>
                                </div>
                            </th>
                            <th>
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Sa</p>
                                </div>
                            </th>
                            <th>
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Su</p>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody id="calendar-body">
                        <!-- El cuerpo del calendario se llenará dinámicamente -->
                    </tbody>
                </table>
            </div>
        </div>
        <div class="md:py-8 py-5 md:px-16 px-5 dark:bg-gray-700 bg-gray-50 rounded-b">
            <div class="px-4">
                <div class="border-b pb-4 border-gray-400 border-dashed">
                    <p class="text-xs font-light leading-3 text-gray-500 dark:text-gray-300">9:00 AM</p>
                    <a tabindex="0" class="focus:outline-none text-lg font-medium leading-5 text-gray-800 dark:text-gray-100 mt-2">Zoom call with design team</a>
                    <p class="text-sm pt-2 leading-4 leading-none text-gray-600 dark:text-gray-300">Discussion on UX sprint and Wireframe review</p>
                </div>
                <div class="border-b pb-4 border-gray-400 border-dashed pt-5">
                    <p class="text-xs font-light leading-3 text-gray-500 dark:text-gray-300">10:00 AM</p>
                    <a tabindex="0" class="focus:outline-none text-lg font-medium leading-5 text-gray-800">
                        Catch up with Lead
                    </a>
                    <p class="text-sm pt-2 leading-4 leading-none text-gray-600 dark:text-gray-300">Project status updates and review</p>
                </div>
                <div class="border-b pb-4 border-gray-400 border-dashed pt-5">
                    <p class="text-xs font-light leading-3 text-gray-500 dark:text-gray-300">1:00 PM</p>
                    <a tabindex="0" class="focus:outline-none text-lg font-medium leading-5 text-gray-800 dark:text-gray-100">
                        Lunch with CEO
                    </a>
                    <p class="text-sm pt-2 leading-4 leading-none text-gray-600 dark:text-gray-300">CEO's board meeting</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const today = new Date();
        let currentMonth = today.getMonth();
        let currentYear = today.getFullYear();

        const monthYearDisplay = document.getElementById('month-year');
        const calendarBody = document.getElementById('calendar-body');

        const months = [
            'January', 'February', 'March', 'April', 'May', 'June', 
            'July', 'August', 'September', 'October', 'November', 'December'
        ];

        function renderCalendar(month, year, holidays) {
            calendarBody.innerHTML = '';
            monthYearDisplay.innerText = `${months[month]} ${year}`;

            const firstDay = new Date(year, month).getDay();
            const daysInMonth = new Date(year, month + 1, 0).getDate();

            let date = 1;

            for (let i = 0; i < 6; i++) {
                const row = document.createElement('tr');

                for (let j = 0; j < 7; j++) {
                    const cell = document.createElement('td');
                    cell.classList.add('pt-6');

                    if (i === 0 && j < firstDay) {
                        cell.innerHTML = '';
                        cell.classList.remove('cursor-pointer');
                    } else if (date > daysInMonth) {
                        break;
                    } else {
                        const cellContent = document.createElement('div');
                        cellContent.classList.add('px-2', 'py-2', 'cursor-pointer', 'flex', 'w-full', 'justify-center');

                        const cellDate = new Date(year, month, date);
                        const formattedDate = cellDate.toISOString().split('T')[0];

                        if (cellDate.toDateString() === today.toDateString()) {
                            cellContent.innerHTML = `<p class="text-base text-gray-500 dark:text-gray-100 font-medium bg-blue-500 text-white rounded-full w-8 h-8 flex items-center justify-center">${date}</p>`;
                        } else if (holidays.includes(formattedDate)) {
                            cellContent.innerHTML = `<p class="text-base text-gray-500 dark:text-gray-100 font-medium bg-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center">${date}</p>`;
                        } else {
                            cellContent.innerHTML = `<p class="text-base text-gray-500 dark:text-gray-100 font-medium">${date}</p>`;
                        }

                        cell.appendChild(cellContent);
                        date++;
                    }

                    row.appendChild(cell);
                }

                calendarBody.appendChild(row);
            }
        }

        document.getElementById('prev-month').addEventListener('click', function () {
            if (currentMonth === 0) {
                currentMonth = 11;
                currentYear--;
            } else {
                currentMonth--;
            }
            fetchHolidaysAndRenderCalendar(currentMonth, currentYear);
        });

        document.getElementById('next-month').addEventListener('click', function () {
            if (currentMonth === 11) {
                currentMonth = 0;
                currentYear++;
            } else {
                currentMonth++;
            }
            fetchHolidaysAndRenderCalendar(currentMonth, currentYear);
        });

        function fetchHolidaysAndRenderCalendar(month, year) {
            fetch('/api/feriados')
                .then(response => response.json())
                .then(data => {
                    const holidays = data.map(holiday => holiday.fecha);
                    renderCalendar(month, year, holidays);
                })
                .catch(error => console.error('Error fetching holidays:', error));
        }

        fetchHolidaysAndRenderCalendar(currentMonth, currentYear);
    });
</script> --}}


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

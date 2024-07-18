<x-dash-layout>

    <div class="container">
        <h1>Assign Roles and Permissions</h1>
    


            @if (session('success'))
                <x-alert type="success" :message="session('success')" />
            @endif
        
            @if (session('error'))
                <x-alert type="error" :message="session('error')" />
            @endif
        
            <section class="container px-4 mx-auto">
                <div class="flex items-center gap-x-3">
                    <h2 class="text-lg font-medium text-gray-800 dark:text-white tracking-wider">Usuarios</h2>
                    <span class="px-3 py-1 text-xs text-blue-600 bg-blue-100 rounded-full dark:bg-gray-800 dark:text-blue-400">{{ $users->count() }} usuarios</span>
                </div>
        
                <div class="flex flex-col mt-6">
                    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                            <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                    <thead class="bg-gray-50 dark:bg-gray-800">
                                        <tr>
                                            <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left text-gray-500 dark:text-gray-400">Nombre</th>
                                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left text-gray-500 dark:text-gray-400">Rol</th>
                                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left text-gray-500 dark:text-gray-400">Acción</th>
                                        </tr>
                                    </thead>
        
                                    @foreach ($users as $user)
                                        <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                                            <tr class="flex flex-col mb-4 sm:table-row">
                                                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                    <div class="inline-flex items-center gap-x-3">
                                                        <div class="flex items-center gap-x-2">
                                                            @if($user->avatar)
                                                                <img class="object-cover w-10 h-10 rounded-full" src="{{ $user->avatar }}" alt="">
                                                            @else
                                                                <img class="object-cover w-10 h-10 rounded-full" src="{{ asset('img/genericUser.svg') }}" alt="">
                                                            @endif
                                                            <div>
                                                                <h2 class="font-medium text-black dark:text-white font-bold uppercase">{{ $user->lastname }}, {{ $user->name }} </h2>
                                                                <p class="text-sm font-normal text-gray-500 dark:text-gray-200">{{ $user->email }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
        
                                                <td class="px-4 py-4 text-sm text-gray-700 whitespace-nowrap">
                                                    @if($user->roles->isNotEmpty())
                                                        @foreach($user->roles as $role)
                                                            <span class="inline-flex items-center px-2 py-1 text-xs font-medium leading-none text-green-800 bg-green-100 rounded-full dark:bg-ambier-800 dark:text-green-400 md:inline-block">
                                                                {{ $role->name }}
                                                            </span>
                                                        @endforeach
                                                    @else
                                                        <span class="inline-flex items-center px-2 py-1 text-xs font-medium leading-none text-black-900 bg-amber-400 rounded-full dark:bg-amber-500 dark:text-amber-900 sm:hidden">
                                                            Sin definir
                                                        </span>
                                                    @endif
                                                </td>
                                                
                                                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                    <div class="flex items-center gap-x-3">
                                                        <a href="{{ route('user.edit', $user->id) }}" class="px-3 py-1 text-sm text-green-600 bg-green-100 rounded-full hover:text-white hover:bg-green-500 dark:bg-gray-800 dark:text-green-400 flex items-center gap-2">
                                                            <x-heroicon-o-pencil class="w-5 h-5" />
                                                         </a>
        
                                                            @csrf
                                                            @method('DELETE')
        
                                                            <button type="submit" class="px-3 py-1 text-sm text-red-600 bg-red-100 rounded-full hover:text-white hover:bg-red-500 dark:bg-gray-800 dark:text-red-400 flex items-center gap-2">
                                                                <x-heroicon-o-trash class="w-5 h-5" />
                                                                 </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </x-dash-layout>        







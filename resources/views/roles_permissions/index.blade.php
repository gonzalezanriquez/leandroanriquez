<x-dash-layout>
    <div class="flex flex-col">
        <h1>Roles and Permissions</h1>
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
            <div class="overflow-hidden">
              <table
                class="min-w-full text-left text-sm font-light text-surface dark:text-white">
                <thead
                  class="border-b border-neutral-200 font-medium dark:border-white/10">
                  <tr>
                    <th scope="col" class="px-6 py-4">id</th>
                    <th scope="col" class="px-6 py-4">Rol</th>

                  </tr>
                </thead>
                <tbody>
                  <tr class="border-b border-neutral-200 dark:border-white/10">
                    @foreach ($roles as $role)
                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $role->id }}</td>
                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $role->name }}</td>

     
                    @endforeach

                  </tr>
                
            
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    <div class="container">
      
        <a href="{{ route('roles_permissions.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Create Rol
          </a>
          <a href="{{ route('roles_permissions.assign') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
            Asignar Rol
          </a>
          
    
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    
      
    </div>
    
</x-dash-layout>

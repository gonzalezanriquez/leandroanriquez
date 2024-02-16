<x-dash-layout>
    <div class="container mx-auto px-4">
        @if (session('status'))
            <div class="bg-green-500 text-white p-4 mb-4">
                {{ session('status') }}
            </div>
        @endif
        <h2 class="text-2xl font-bold mb-4">Roles</h2>
        <a href="{{ route('roles.create') }}" class="bg-green-500 text-white px-4 py-2 rounded">Create Role</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th class="py-2">ID</th>
                    <th class="py-2">Name</th>
                    <th class="py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($roles as $role)
                    <tr>
                        <td class="py-2">{{ $role->id }}</td>
                        <td class="py-2">{{ $role->name }}</td>
                        <td class="py-2 flex space-x-2">
                            <a href="{{ route('roles.edit', $role->id) }}" class="bg-blue-500 text-white px-2 py-1 rounded">
                                <i data-feather="edit"></i>
                            </a>
                            <form action="{{ route('roles.destroy', $role->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded" onclick="return confirm('Are you sure?')">
                                    <i data-feather="trash-2"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No roles found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-dash-layout>

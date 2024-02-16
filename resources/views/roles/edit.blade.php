<x-dash-layout>

    <div class="container">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <h2>Edit Role</h2>
        <form action="{{ route('roles.update', $role->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Role Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $role->name }}"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Update Role</button>
        </form>
    </div>
</x-dash-layout>

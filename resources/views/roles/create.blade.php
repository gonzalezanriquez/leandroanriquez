<x-dash-layout>

    <div class="container">
        <h2>Create Role</h2>
        <form action="{{ route('roles.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Role Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <button type="submit" class="btn btn-success">Create Role</button>
        </form>
    </div>
</x-dash-layout>

<x-admin-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-bold">Role Details</h1>
    </x-slot>

    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
        <div class="mb-4">
            <h2 class="text-xl font-semibold text-gray-900">Role Name</h2>
            <p class="mt-1 text-gray-600">{{ $role->name }}</p>
        </div>

        <div class="mb-4">
            <h2 class="text-xl font-semibold text-gray-900">Permissions</h2>
            @if($role->permissions->isEmpty())
                <p class="text-gray-600">No permissions assigned.</p>
            @else
                <ul class="list-disc ml-5">
                    @foreach($role->permissions as $permission)
                        <li class="text-gray-600">{{ $permission->name }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <div class="flex items-center justify-end space-x-4">
            <a href="{{ route('admin.roles.edit', $role) }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">Edit Role</a>
            <form action="{{ route('admin.roles.destroy', $role) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this role?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md">Delete Role</button>
            </form>
        </div>
    </div>
</x-admin-layout>

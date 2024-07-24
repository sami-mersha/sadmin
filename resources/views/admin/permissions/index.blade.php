<x-admin-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-bold">Permissions List</h1>
    </x-slot>

    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
        <!-- Desktop View -->
        <div class="hidden md:block">
            <a href="{{ route('admin.permissions.create') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-white text-xs uppercase tracking-widest shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mb-4">
                Add New Permission
            </a>

            @if ($permissions->isEmpty())
                <p class="text-gray-500">No permissions found.</p>
            @else
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700 mt-4">
                    <thead class="bg-gray-50 dark:bg-gray-800">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Permission Name</th>
                            <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-gray-900 divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach ($permissions as $permission)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">{{ $permission->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="{{ route('admin.permissions.show', $permission) }}" class="text-indigo-600 hover:text-indigo-900">View</a>
                                    <a href="{{ route('admin.permissions.edit', $permission) }}" class="text-indigo-600 hover:text-indigo-900 ml-4">Edit</a>
                                    <form action="{{ route('admin.permissions.destroy', $permission) }}" method="POST" class="inline ml-4" onsubmit="return confirm('Are you sure you want to delete this permission?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>

        <!-- Mobile View -->
        <div class="block md:hidden space-y-4">
            <a href="{{ route('admin.permissions.create') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-white text-xs uppercase tracking-widest shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mb-4">
                Create New Permission
            </a>

            @if ($permissions->isEmpty())
                <p class="text-gray-500">No permissions found.</p>
            @else
                @foreach ($permissions as $permission)
                    <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md">
                        <div class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-2">{{ $permission->name }}</div>
                        <div class="flex space-x-4">
                            <a href="{{ route('admin.permissions.show', $permission) }}" class="text-indigo-600 hover:text-indigo-900">View</a>
                            <a href="{{ route('admin.permissions.edit', $permission) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            <form action="{{ route('admin.permissions.destroy', $permission) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this permission?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</x-admin-layout>

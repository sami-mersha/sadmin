<x-admin-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-bold">Permission Details</h1>
    </x-slot>

    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-200">Permission Name</label>
            <p class="mt-1 text-gray-900 dark:text-gray-100">{{ $permission->name }}</p>
        </div>

        <div class="flex items-center justify-between mt-6">
            <a href="{{ route('admin.permissions.index') }}" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">
                Back to Permissions List
            </a>
            <a href="{{ route('admin.permissions.edit', $permission) }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-white text-xs uppercase tracking-widest shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Edit Permission
            </a>
            <form action="{{ route('admin.permissions.destroy', $permission) }}" method="POST" class="inline ml-4">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-600 hover:text-red-900">Delete Permission</button>
            </form>
        </div>
    </div>
</x-admin-layout>

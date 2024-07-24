<x-admin-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-bold">User Details</h1>
    </x-slot>

    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
        <div class="mb-4">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-100">User Information</h2>
            <p class="mt-2 text-gray-600 dark:text-gray-400">Name: <span class="font-medium">{{ $user->name }}</span></p>
            <p class="mt-2 text-gray-600 dark:text-gray-400">Email: <span class="font-medium">{{ $user->email }}</span></p>
        </div>

        <div class="mb-4">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-100">Roles</h2>
            @if($user->roles->isEmpty())
                <p class="mt-2 text-gray-600 dark:text-gray-400">No roles assigned.</p>
            @else
                <ul class="list-disc list-inside mt-2 text-gray-600 dark:text-gray-400">
                    @foreach($user->roles as $role)
                        <li>{{ $role->name }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <div class="flex items-center justify-between mt-4">
            <a href="{{ route('admin.users.index') }}" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">
                Back to Users List
            </a>
            <a href="{{ route('admin.users.edit', $user) }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-white text-xs uppercase tracking-widest shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Edit User
            </a>
        </div>
    </div>
</x-admin-layout>

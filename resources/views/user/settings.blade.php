<x-app-layout>
    <div class="max-w-xl mx-auto py-8 px-4">
        <h1 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white">Settings</h1>

        @if(session('status'))
            <div class="mb-4 text-green-600 dark:text-green-400">{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('settings.update') }}" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}"
                       class="mt-1 block w-full rounded-md dark:bg-gray-700 dark:text-white border-gray-300 dark:border-gray-600" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}"
                       class="mt-1 block w-full rounded-md dark:bg-gray-700 dark:text-white border-gray-300 dark:border-gray-600" required>
            </div>

            <div class="mb-4">
                <label for="profile_picture" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Profile Picture</label>
                <input type="file" name="profile_picture" id="profile_picture"
                       class="mt-1 block w-full text-gray-700 dark:text-white">
            </div>

            <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
                Save Settings
            </button>
        </form>
    </div>
</x-app-layout>

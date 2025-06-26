<x-app-layout>
    <div class="section">
        <h1 class="page-title">Welcome, {{ $user->name }}</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Weekly Progress -->
            <div class="card">
                <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Weekly Progress</h2>
                <p class="text-sm text-gray-700 dark:text-gray-300">
                    Track your Bible reading, journal entries, and book assignments for this week.
                </p>
            </div>

            <!-- Group Overview -->
            <div class="card">
                <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Your Groups</h2>
                <p class="text-sm text-gray-700 dark:text-gray-300">
                    View progress and activity across all of your groups.
                </p>
            </div>
        </div>
    </div>
</x-app-layout>

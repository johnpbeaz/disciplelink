<x-app-layout>
    <div class="max-w-4xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">
            {{ $readingPlan['title'] }}
        </h1>

        <p class="text-gray-700 dark:text-gray-300 mb-6">
            {{ $readingPlan['description'] }}
        </p>

        <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 mb-6">
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Assigned Passages</h2>
            <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 space-y-1">
                @foreach($readingPlan['passages'] as $verse)
                    <li>{{ $verse }}</li>
                @endforeach
            </ul>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Memory Verses</h2>
            <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 space-y-1">
                @foreach($readingPlan['memoryVerses'] as $memory)
                    <li>{{ $memory }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</x-app-layout>

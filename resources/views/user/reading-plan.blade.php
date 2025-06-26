<x-app-layout>
    <div class="max-w-5xl mx-auto py-8 px-4">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-4">
            {{ $readingPlan['title'] }}
        </h1>

        <p class="text-gray-700 dark:text-gray-300 mb-6">
            {{ $readingPlan['description'] }}
        </p>

        <div class="mb-8">
            <h2 class="text-lg font-semibold text-gray-800 dark:text-white mb-2">Assigned Passages</h2>
            <ul class="list-disc list-inside text-gray-600 dark:text-gray-300">
                @foreach($readingPlan['passages'] as $verse)
                    <li>{{ $verse }}</li>
                @endforeach
            </ul>
        </div>

        <div>
            <h2 class="text-lg font-semibold text-gray-800 dark:text-white mb-2">Memory Verses</h2>
            <ul class="list-disc list-inside text-gray-600 dark:text-gray-300">
                @foreach($readingPlan['memoryVerses'] as $memory)
                    <li>{{ $memory }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <div class="max-w-5xl mx-auto py-8 px-4">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Your Journal Entries</h1>
            <a href="{{ route('journals.create') }}"
               class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
                + New Entry
            </a>
        </div>

        @foreach($journals as $journal)
            <div class="bg-white dark:bg-gray-800 p-6 rounded shadow mb-4">
                <h2 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $journal['title'] }}</h2>
                <p class="text-sm text-gray-500">{{ $journal['date'] }}</p>
                <p class="mt-2 text-gray-700 dark:text-gray-300">{{ $journal['response'] }}</p>
            </div>
        @endforeach
    </div>
</x-app-layout>

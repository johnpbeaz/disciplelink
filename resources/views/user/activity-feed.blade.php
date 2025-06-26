<x-app-layout>
    <div class="max-w-4xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Activity Feed</h1>

        <ul class="space-y-4">
            @foreach($feed as $entry)
                <li class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow flex justify-between items-start">
                    <div>
                        <p class="text-gray-800 dark:text-white font-semibold">
                            {{ $entry['user'] }}
                            <span class="font-normal text-gray-600 dark:text-gray-300">– {{ $entry['message'] }}</span>
                        </p>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                            {{ $entry['timestamp'] }}
                        </p>
                    </div>
                    <div>
                        {{-- Placeholder for emoji reactions --}}
                        <button type="button"
                                class="text-xl hover:scale-110 transition transform duration-150 ease-in-out">
                            👍
                        </button>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>

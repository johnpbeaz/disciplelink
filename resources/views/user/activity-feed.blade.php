<x-app-layout>
    <div class="max-w-4xl mx-auto py-8 px-4">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Activity Feed</h1>

        <ul class="space-y-4">
            @foreach($feed as $entry)
                <li class="bg-white dark:bg-gray-800 p-5 rounded shadow">
                    <div class="flex justify-between">
                        <div>
                            <p class="text-gray-800 dark:text-gray-100 font-semibold">
                                {{ $entry['user'] }}
                                <span class="font-normal text-gray-600 dark:text-gray-300">- {{ $entry['message'] }}</span>
                            </p>
                            <p class="text-sm text-gray-500 dark:text-gray-400">{{ $entry['timestamp'] }}</p>
                        </div>
                        <div>
                            {{-- Placeholder for emoji reactions --}}
                            <span class="text-xl">👍</span>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>

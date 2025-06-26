<x-app-layout>
    <div class="max-w-5xl mx-auto py-8 px-4">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Book Assignments</h1>

        <ul class="space-y-4">
            @foreach($assignments as $assignment)
                <li class="bg-white dark:bg-gray-800 p-5 rounded shadow">
                    <div class="flex justify-between items-center">
                        <span class="text-lg text-gray-800 dark:text-white font-semibold">{{ $assignment['title'] }}</span>
                        <a href="{{ route('book-assignments.show', $assignment['id']) }}"
                           class="text-indigo-600 hover:text-indigo-800 dark:text-indigo-400 dark:hover:text-indigo-300 font-medium">
                            View & Respond
                        </a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>

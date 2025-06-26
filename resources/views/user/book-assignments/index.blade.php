<x-app-layout>
    <div class="max-w-5xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Book Assignments</h1>

        <ul class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($assignments as $assignment)
                <li class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
                    <div class="flex justify-between items-center">
                        <div>
                            <h2 class="text-lg font-semibold text-gray-900 dark:text-white">
                                {{ $assignment['title'] }}
                            </h2>
                        </div>
                        <div>
                            <a href="{{ route('book-assignments.show', $assignment['id']) }}"
                               class="text-indigo-600 dark:text-indigo-400 hover:underline font-medium text-sm">
                                View & Respond
                            </a>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>

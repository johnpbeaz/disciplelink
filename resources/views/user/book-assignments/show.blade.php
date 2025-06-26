<x-app-layout>
    <div class="max-w-3xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">{{ $assignment['title'] }}</h1>

        <form action="{{ route('book-assignments.store') }}" method="POST">
            @csrf

            @foreach($assignment['questions'] as $index => $question)
                <div class="mb-6">
                    <label class="block font-medium text-gray-700 dark:text-gray-200 mb-2">
                        {{ $question }}
                    </label>
                    <textarea name="responses[{{ $index }}]" rows="4"
                              class="block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm"
                              required></textarea>
                </div>
            @endforeach

            <button type="submit"
                    class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
                Submit Assignment
            </button>
        </form>
    </div>
</x-app-layout>

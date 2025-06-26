<x-app-layout>
    <div class="section">
        <h1 class="page-title">Your Groups</h1>

        @if(count($groups))
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($groups as $group)
                    <div class="card">
                        <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">
                            {{ $group['name'] }}
                        </h2>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mb-2">
                            Status: <span class="capitalize">{{ $group['status'] }}</span>
                        </p>
                        <a href="#"
                           class="text-indigo-600 dark:text-indigo-400 text-sm hover:underline font-medium">
                            View Group
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-gray-700 dark:text-gray-300">You're not part of any groups yet.</p>
        @endif
    </div>
</x-app-layout>

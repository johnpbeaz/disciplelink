<x-app-layout>
    <x-page-title>Group Details</x-page-title>

    <div class="max-w-4xl mx-auto py-6 bg-white p-6 rounded shadow space-y-4">
        <div>
            <h2 class="text-xl font-semibold">Name</h2>
            <p>{{ $group->name }}</p>
        </div>

        <div>
            <h2 class="text-xl font-semibold">Community</h2>
            <p>{{ $group->community->name ?? '—' }}</p>
        </div>

        <div>
            <h2 class="text-xl font-semibold">Leader</h2>
            <p>{{ $group->leader?->name ?? '—' }}</p>
        </div>

        <div class="pt-4">
            <a href="{{ route('admin.groups.edit', $group) }}" class="text-blue-600 hover:underline">Edit</a>
        </div>
    </div>
</x-app-layout>

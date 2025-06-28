<x-app-layout>
    <x-page-title>Groups</x-page-title>

    <div class="max-w-7xl mx-auto py-6">
        <div class="flex justify-end mb-4">
            <a href="{{ route('admin.groups.create') }}" class="px-4 py-2 bg-red-700 text-white rounded hover:bg-red-800">
                + New Group
            </a>
        </div>

        <!-- Group Table -->
        <div class="bg-white shadow rounded">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-100 text-left text-sm font-semibold text-gray-700">
                    <tr>
                        <th class="px-6 py-3">Name</th>
                        <th class="px-6 py-3">Community</th>
                        <th class="px-6 py-3">Leader</th>
                        <th class="px-6 py-3 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($groups as $group)
                        <tr class="border-t">
                            <td class="px-6 py-4">{{ $group->name }}</td>
                            <td class="px-6 py-4">{{ $group->community->name ?? '—' }}</td>
                            <td class="px-6 py-4">{{ $group->leader?->name ?? '—' }}</td>
                            <td class="px-6 py-4 text-right space-x-2">
                                <a href="{{ route('admin.groups.edit', $group) }}" class="text-blue-600 hover:underline">Edit</a>
                                <form action="{{ route('admin.groups.destroy', $group) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>

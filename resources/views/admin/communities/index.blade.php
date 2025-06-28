<x-app-layout>
    <x-page-title title="Communities" />

    <x-section>
        <div class="flex justify-between mb-4">
            <h2 class="text-2xl font-semibold">Manage Communities</h2>
            <a href="{{ route('admin.communities.create') }}"
               class="bg-primary text-white px-4 py-2 rounded hover:bg-primary-dark">
                + New Community
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white shadow rounded">
            <table class="w-full table-auto text-left">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="p-4">Name</th>
                        <th class="p-4">Description</th>
                        <th class="p-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($communities as $community)
                        <tr class="border-b">
                            <td class="p-4">{{ $community->name }}</td>
                            <td class="p-4">{{ $community->description }}</td>
                            <td class="p-4 space-x-2">
                                <a href="{{ route('admin.communities.edit', $community) }}"
                                   class="text-blue-600 hover:underline">Edit</a>
                                <form action="{{ route('admin.communities.destroy', $community) }}"
                                      method="POST"
                                      class="inline"
                                      onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-600 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="p-4">
                {{ $communities->links() }}
            </div>
        </div>
    </x-section>
</x-app-layout>

<x-app-layout>
    <x-page-title>Edit Group</x-page-title>

    <div class="max-w-4xl mx-auto py-6">
        <form action="{{ route('admin.groups.update', $group) }}" method="POST" class="space-y-6 bg-white p-6 rounded shadow">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-medium text-gray-700">Group Name</label>
                <input type="text" name="name" value="{{ old('name', $group->name) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Community</label>
                <select name="community_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    @foreach ($communities as $community)
                        <option value="{{ $community->id }}" @selected($group->community_id == $community->id)>
                            {{ $community->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Group Leader</label>
                <select name="group_leader_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    <option value="">-- None --</option>
                    @foreach ($groupLeaders as $leader)
                        <option value="{{ $leader->id }}" @selected($group->group_leader_id == $leader->id)>
                            {{ $leader->name }} ({{ $leader->email }})
                        </option>
                    @endforeach
                </select>
            </div>


            <div class="flex justify-end">
                <button type="submit" class="px-6 py-2 bg-red-700 text-white rounded hover:bg-red-800">
                    Update Group
                </button>
            </div>
        </form>
    </div>
</x-app-layout>

<x-app-layout>
    <x-page-title>Edit Community</x-page-title>

    <div class="max-w-4xl mx-auto py-6">
        <form action="{{ route('admin.communities.update', $community) }}" method="POST" class="space-y-6 bg-white p-6 rounded shadow">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-medium text-gray-700">Community Name</label>
                <input type="text" name="name" value="{{ old('name', $community->name) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('description', $community->description) }}</textarea>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Community Leader</label>
                <select name="community_leader_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    <option value="">-- None --</option>
                    @foreach ($communityLeaders as $leader)
                        <option value="{{ $leader->id }}" @selected(old('community_leader_id', optional($community ?? null)->community_leader_id) == $leader->id)>
                            {{ $leader->name }}
                        </option>
                    @endforeach
                </select>
            </div>


            <div class="flex justify-end">
                <button type="submit" class="px-6 py-2 bg-red-700 text-white rounded hover:bg-red-800">
                    Update Community
                </button>
            </div>
        </form>
    </div>
</x-app-layout>

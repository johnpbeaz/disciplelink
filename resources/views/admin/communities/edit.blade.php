<x-app-layout>
    <x-page-title title="Edit Community" />

    <x-section>
        <form action="{{ route('admin.communities.update', $community) }}" method="POST" class="space-y-6 bg-white p-6 rounded shadow">
            @csrf
            @method('PUT')

            <div>
                <label class="block font-semibold mb-1">Name</label>
                <input type="text" name="name" value="{{ old('name', $community->name) }}"
                       class="w-full border-gray-300 rounded" required>
                @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block font-semibold mb-1">Description</label>
                <textarea name="description" class="w-full border-gray-300 rounded" rows="4">{{ old('description', $community->description) }}</textarea>
                @error('description') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <button type="submit" class="bg-primary text-white px-6 py-2 rounded hover:bg-primary-dark">
                Save Changes
            </button>
        </form>
    </x-section>
</x-app-layout>

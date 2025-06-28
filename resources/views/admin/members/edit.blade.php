<x-app-layout>
    <x-page-title>Edit Member</x-page-title>

    <x-section>
        <x-card>
            <form action="{{ route('admin.members.update', $member) }}" method="POST">
                @method('PUT')
                @include('admin.members._form')
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </x-card>
    </x-section>
</x-app-layout>

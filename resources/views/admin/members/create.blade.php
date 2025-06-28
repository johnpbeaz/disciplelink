<x-app-layout>
    <x-page-title>Create Member</x-page-title>

    <x-section>
        <x-card>
            <form action="{{ route('admin.members.store') }}" method="POST">
                @include('admin.members._form')
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </x-card>
    </x-section>
</x-app-layout>

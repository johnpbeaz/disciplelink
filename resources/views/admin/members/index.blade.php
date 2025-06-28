<x-app-layout>
    <x-page-title>Members</x-page-title>

    <x-section>
        <a href="{{ route('admin.members.create') }}" class="btn btn-primary mb-4">Add Member</a>

        <x-card>
            <table class="table-auto w-full text-left">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Group</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($members as $member)
                        <tr>
                            <td>{{ $member->name }}</td>
                            <td>{{ $member->email }}</td>
                            <td>{{ $member->group->name ?? '—' }}</td>
                            <td class="flex space-x-2">
                                <a href="{{ route('admin.members.edit', $member) }}" class="btn btn-secondary">Edit</a>
                                <form action="{{ route('admin.members.destroy', $member) }}" method="POST" onsubmit="return confirm('Delete this member?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </x-card>
    </x-section>
</x-app-layout>

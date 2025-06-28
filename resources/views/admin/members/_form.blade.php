@csrf
<div class="mb-4">
    <label>Name</label>
    <input type="text" name="name" class="form-input w-full" value="{{ old('name', $member->name ?? '') }}" required>
</div>
<div class="mb-4">
    <label>Email</label>
    <input type="email" name="email" class="form-input w-full" value="{{ old('email', $member->email ?? '') }}" required>
</div>
<div class="mb-4">
    <label>Group</label>
    <select name="group_id" class="form-select w-full">
        <option value="">— Select Group —</option>
        @foreach($groups as $group)
            <option value="{{ $group->id }}" {{ old('group_id', $member->group_id ?? '') == $group->id ? 'selected' : '' }}>{{ $group->name }}</option>
        @endforeach
    </select>
</div>

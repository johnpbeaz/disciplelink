<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Community;
use App\Models\User;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::with(['community', 'leader'])->latest()->get();
        return view('admin.groups.index', compact('groups'));
    }

    public function create()
    {
        $communities = Community::orderBy('name')->get();
        $groupLeaders = User::whereHas('roles', function ($query) {
            $query->where('name', 'group_leader');
        })->orderBy('name')->get();

        return view('admin.groups.create', compact('communities', 'groupLeaders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'community_id' => 'nullable|exists:communities,id',
            'group_leader_id' => 'nullable|exists:users,id',
        ]);

        Group::create($request->only(['name', 'community_id', 'group_leader_id']));

        return redirect()->route('admin.groups.index')->with('success', 'Group created successfully.');
    }

    public function edit(Group $group)
    {
        $communities = Community::orderBy('name')->get();
        $groupLeaders = User::whereHas('roles', function ($query) {
            $query->where('name', 'group_leader');
        })->orderBy('name')->get();

        return view('admin.groups.edit', compact('group', 'communities', 'groupLeaders'));
    }

    public function update(Request $request, Group $group)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'community_id' => 'nullable|exists:communities,id',
            'group_leader_id' => 'nullable|exists:users,id',
        ]);

        $group->update($request->only(['name', 'community_id', 'group_leader_id']));

        return redirect()->route('admin.groups.index')->with('success', 'Group updated successfully.');
    }

    public function show(Group $group)
    {
        $group->load(['community', 'leader']);
        return view('admin.groups.show', compact('group'));
    }

    public function destroy(Group $group)
    {
        $group->delete();
        return redirect()->route('admin.groups.index')->with('success', 'Group deleted successfully.');
    }
}

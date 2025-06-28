<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\Group;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::with('group')->get();
        return view('admin.members.index', compact('members'));
    }

    public function create()
    {
        $groups = Group::all();
        return view('admin.members.create', compact('groups'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:members,email',
            'group_id' => 'nullable|exists:groups,id',
        ]);

        Member::create($validated);

        return redirect()->route('admin.members.index')->with('success', 'Member created.');
    }

    public function edit(Member $member)
    {
        $groups = Group::all();
        return view('admin.members.edit', compact('member', 'groups'));
    }

    public function update(Request $request, Member $member)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:members,email,' . $member->id,
            'group_id' => 'nullable|exists:groups,id',
        ]);

        $member->update($validated);

        return redirect()->route('admin.members.index')->with('success', 'Member updated.');
    }

    public function destroy(Member $member)
    {
        $member->delete();

        return redirect()->route('admin.members.index')->with('success', 'Member deleted.');
    }
}

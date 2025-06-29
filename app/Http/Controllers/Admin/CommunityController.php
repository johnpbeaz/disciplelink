<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Community;
use App\Models\Member;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function index()
    {
        $communities = Community::with('leaders')->latest()->paginate(10);
        return view('admin.communities.index', compact('communities'));
    }

    public function create()
    {
        $communityLeaders = Member::orderBy('name')->get(); // pulling from members
        return view('admin.communities.create', compact('communityLeaders'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:communities,name',
            'description' => 'nullable|string',
            'community_leader_id' => 'nullable|exists:members,id', // validate against members
        ]);

        Community::create($validated);

        return redirect()->route('admin.communities.index')->with('success', 'Community created successfully.');
    }

    public function edit(Community $community)
    {
        $communityLeaders = Member::orderBy('name')->get(); // pulling from members
        return view('admin.communities.edit', compact('community', 'communityLeaders'));
    }

    public function update(Request $request, Community $community)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:communities,name,' . $community->id,
            'description' => 'nullable|string',
            'community_leader_id' => 'nullable|exists:members,id', // validate against members
        ]);

        $community->update($validated);

        return redirect()->route('admin.communities.index')->with('success', 'Community updated successfully.');
    }

    public function destroy(Community $community)
    {
        $community->delete();

        return redirect()->route('admin.communities.index')->with('success', 'Community deleted.');
    }
}

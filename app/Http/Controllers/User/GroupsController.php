<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class GroupsController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Temporary mock data — replace with real relationship later
        $groups = [
            ['name' => 'Monday Men’s Group', 'status' => 'active'],
            ['name' => 'Prayer & Purpose', 'status' => 'active'],
        ];

        return view('user.groups', compact('user', 'groups'));
    }
}

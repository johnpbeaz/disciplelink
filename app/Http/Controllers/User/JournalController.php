<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Mock journal entries for now
        $journals = [
            [
                'title' => 'Walking in Faith',
                'date' => '2025-06-25',
                'response' => 'Today I reflected on Abraham’s obedience...'
            ],
            [
                'title' => 'Trusting God',
                'date' => '2025-06-24',
                'response' => 'Psalm 23 reminded me that He is with me in every valley...'
            ]
        ];

        return view('user.journals.index', compact('user', 'journals'));
    }

    public function create()
    {
        return view('user.journals.create');
    }

    public function store(Request $request)
    {
        // Simulate storing journal entry
        return redirect()->route('journals.index')->with('status', 'Journal submitted and locked.');
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ActivityFeedController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Simulated feed data
        $feed = [
            [
                'user' => 'You',
                'type' => 'Journal',
                'message' => 'Submitted a new journal entry.',
                'timestamp' => '5 minutes ago',
            ],
            [
                'user' => 'Sarah M.',
                'type' => 'Reading',
                'message' => 'Completed Genesis 1:1–10.',
                'timestamp' => '15 minutes ago',
            ],
            [
                'user' => 'You',
                'type' => 'Assignment',
                'message' => 'Submitted a response to "The Ruthless Elimination of Hurry."',
                'timestamp' => '1 hour ago',
            ],
        ];

        return view('user.activity-feed', compact('user', 'feed'));
    }
}

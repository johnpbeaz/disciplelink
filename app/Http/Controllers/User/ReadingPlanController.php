<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ReadingPlanController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Temporary mock reading plan — replace with DB/API later
        $readingPlan = [
            'title' => 'Week 1: Foundations',
            'description' => 'Discovering the power of Genesis and John.',
            'passages' => [
                'Genesis 1:1–10',
                'Genesis 1:11–31',
                'John 1:1–18',
                'Psalm 1',
            ],
            'memoryVerses' => [
                'John 1:1',
                'Genesis 1:1',
            ]
        ];

        return view('user.reading-plan', compact('user', 'readingPlan'));
    }
}

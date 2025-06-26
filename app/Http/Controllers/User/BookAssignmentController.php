<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookAssignmentController extends Controller
{
    public function index()
    {
        $assignments = [
            ['id' => 1, 'title' => 'The Ruthless Elimination of Hurry'],
            ['id' => 2, 'title' => 'Emotionally Healthy Spirituality'],
        ];

        return view('user.book-assignments.index', compact('assignments'));
    }

    public function show($id)
    {
        // Mock assignment with questions
        $assignment = [
            'id' => $id,
            'title' => 'The Ruthless Elimination of Hurry',
            'questions' => [
                'What is one idea that challenged you this week?',
                'How will you implement that idea into your life?',
                'What stood out to you from the reading?',
            ]
        ];

        return view('user.book-assignments.show', compact('assignment'));
    }

    public function store(Request $request)
    {
        // Simulate storing the answers
        return redirect()->route('book-assignments.index')->with('status', 'Assignment submitted and locked.');
    }
}

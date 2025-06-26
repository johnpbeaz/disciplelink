@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
    <h1 class="text-2xl font-bold text-gray-900 mb-4">
        Welcome, {{ $user->name }}
    </h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Weekly Progress -->
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-lg font-semibold text-gray-800">Weekly Progress</h2>
            <p class="text-sm text-gray-600 mt-2">Progress across reading plans, journals, and book assignments will go here.</p>
        </div>

        <!-- Group Overview -->
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-lg font-semibold text-gray-800">Your Groups</h2>
            <p class="text-sm text-gray-600 mt-2">Quick access to your active groups and their progress.</p>
        </div>
    </div>
</div>
@endsection

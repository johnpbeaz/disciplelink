<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\GroupsController;
use App\Http\Controllers\User\ReadingPlanController;
use App\Http\Controllers\User\JournalController;
use App\Http\Controllers\User\BookAssignmentController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\ActivityFeedController;
use App\Http\Controllers\User\SettingsController;
use App\Http\Controllers\User\StaticPageController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\CommunityController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Middleware\IsAdmin;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // User Features
    Route::get('/groups', [GroupsController::class, 'index'])->name('groups.index');
    Route::get('/reading-plan', [ReadingPlanController::class, 'index'])->name('reading-plan.index');

    // Journals
    Route::get('/journals', [JournalController::class, 'index'])->name('journals.index');
    Route::get('/journals/create', [JournalController::class, 'create'])->name('journals.create');
    Route::post('/journals', [JournalController::class, 'store'])->name('journals.store');

    // Book Assignments
    Route::get('/book-assignments', [BookAssignmentController::class, 'index'])->name('book-assignments.index');
    Route::get('/book-assignments/{id}', [BookAssignmentController::class, 'show'])->name('book-assignments.show');
    Route::post('/book-assignments', [BookAssignmentController::class, 'store'])->name('book-assignments.store');

    // Activity & Settings
    Route::get('/activity', [ActivityFeedController::class, 'index'])->name('activity.index');
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
    Route::post('/settings', [SettingsController::class, 'update'])->name('settings.update');

    // Static Pages
    Route::get('/getting-started', [StaticPageController::class, 'gettingStarted'])->name('getting-started');
    Route::get('/terms-of-use', [StaticPageController::class, 'terms'])->name('terms');
});

// Admin Routes
Route::middleware(['auth', IsAdmin::class])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    
    Route::resource('communities', CommunityController::class)->except(['show']);

    Route::resource('groups', GroupController::class);

    Route::resource('members', MemberController::class);

});

require __DIR__ . '/auth.php';

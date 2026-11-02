<?php
use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/dashboard', function () {
        inertia()->setRootView('staff');
        return inertia('Dashboard');
    })->name('staff.dashboard');
});

<?php
use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'auth:customer'])->group(function () {
    Route::get('/dashboard', function () {
        inertia()->setRootView('portal');
        return inertia('Dashboard');
    })->name('portal.dashboard');
});

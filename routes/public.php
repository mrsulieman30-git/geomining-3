<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    inertia()->setRootView('app');
    return inertia('Welcome');
});
Route::get('/design', function () {
    if (app()->environment('production')) {
        abort(404);
    }
    inertia()->setRootView('app');
    return inertia('DesignGallery');
});

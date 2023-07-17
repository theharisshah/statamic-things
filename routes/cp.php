<?php

use Illuminate\Support\Facades\Route;

Route::middleware('statamic.cp.authenticated')->group(function () {
    Route::get('/comments', [\App\Http\Controllers\CommentController::class, 'index'])->name('comments');
});

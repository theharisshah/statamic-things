<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Statamic\Statamic;
use Statamic\Facades\CP\Nav;
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Statamic::vite('app', [
        //     'resources/js/cp.js',
        //     'resources/css/cp.css',
        // ]);

//        Statamic::pushCpRoutes(function () {
//            Route::namespace('\App\Http\Controllers')->group(function () {
//                require base_path('routes/cp.php');
//            });
//        });

//        Nav::extend(function ($nav) {
//            $nav->content('Comment')
//                ->route('comments');
//        });
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
use Statamic\Facades\Taxonomy;

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

        Validator::extend('belongs_to', function ($attribute, $value, $parameters, $validator)  {
            $data = $validator->getData();
            $prefix = "$parameters[0]::";
            $dependedValue = str_replace($prefix, "", $data[$parameters[0]][0]);

            $terms = Taxonomy::findByHandle($parameters[0])->queryTerms()
                ->where('title', $dependedValue)
                ->first();
            $selectedValue = str_replace("$attribute::", "", $value[0]);

            $exists = $terms->subcategories->where('slug', $selectedValue)->first();

            return !empty($exists);

        }, "Invalid :attribute selected!");

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

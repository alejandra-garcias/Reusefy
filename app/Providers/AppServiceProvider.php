<?php

namespace App\Providers;
use App\Models\Category;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\Facades\View;

use Illuminate\Support\ServiceProvider;

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
    public function boot()
    {
        try {
            $categories= Category::all();
            View::share('categories', $categories);
        } catch (\Throwable $th) {
        dump("ALERT: Recuerda lanzar las migrations cuando acabes el clone");
        }
    }

}

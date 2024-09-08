<?php

namespace App\Providers;

use App\Models\City;
use App\Models\State;
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
    public function boot(): void
    {
        $states = State::all();
        $cities = City::all();
        View::share('state',$states);
        View::share('city',$cities);
    }
}

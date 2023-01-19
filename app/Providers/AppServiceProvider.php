<?php

namespace App\Providers;

use App\Observers\CategoryObserver;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\GroupUser;
use App\Observers\GroupUserObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        GroupUser::observe(GroupUserObserver::class);
    }
}

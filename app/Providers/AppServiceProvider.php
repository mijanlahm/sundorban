<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Event;
use App\Listeners\MergeGuestCart;

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
        // 
    }

    
}

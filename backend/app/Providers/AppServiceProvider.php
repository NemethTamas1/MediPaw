<?php

namespace App\Providers;

use App\Models\Dolgozo;
use App\Models\Gazdi;
use App\Policies\UserPolicy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Gate;
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
        Model::shouldBeStrict();
        
        Gate::define('isDoctor', [UserPolicy::class, 'isDoctor']);
        Gate::define('isAssistant', [UserPolicy::class, 'isAssistant']);
        Gate::define('isCleaner', [UserPolicy::class, 'isCleaner']);
        Gate::define('isGazdi', function($user){
            return $user instanceof Gazdi;
        });
    }
}

<?php

namespace App\Providers;

use App\Models\Allat;
use App\Models\Dolgozo;
use App\Models\Orvos;
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
    public function boot(): void
    {
        Model::shouldBeStrict();

        Gate::define("allat-felvetel", function(Dolgozo $dolgozo, Allat $allat){
            return "admin" == $dolgozo->role || $allat->gazdi_id == $dolgozo->id;
        });

        Gate::define("dolgozo-felvetel", function(Dolgozo $dolgozo, Dolgozo $ujDolgozo){
            return "admin" == $dolgozo->role;
        });
        
    }
}

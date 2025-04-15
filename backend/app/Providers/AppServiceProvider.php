<?php

namespace App\Providers;

use App\Models\Allat;
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

        Gate::define("allat-felvetel", function(Orvos $orvos, Allat $allat){
            return "admin" == $orvos->role || $allat->gazdi_id == $orvos->id;
        });
    }
}

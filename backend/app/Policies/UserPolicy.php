<?php

namespace App\Policies;

use App\Models\Dolgozo;
use Illuminate\Support\Facades\Gate;
use Laravel\Pail\ValueObjects\Origin\Console;

class UserPolicy
{



    public function isDoctor(Dolgozo $dolgozo)
    {
        return "admin" == $dolgozo->role && 'orvos' == $dolgozo->beosztas;
    }

    public function isAssistant(Dolgozo $dolgozo)
    {
        return "admin" == $dolgozo->role && 'asszisztens' == $dolgozo->beosztas;
    }

    public function isCleaner(Dolgozo $dolgozo)
    {
        return "user" == $dolgozo->role && 'takarito' == $dolgozo->beosztas;
    }
}

<?php

namespace App\Policies;

use App\Models\Dolgozo;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class BasePolicy
{
    protected function isAdmin(Dolgozo $dolgozo)
    {
        return "admin" == $dolgozo->role;
    }
}

<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class BasePolicy
{
    protected function isAdmin(User $user)
    {
        return "admin" == $user->role;
    }
}

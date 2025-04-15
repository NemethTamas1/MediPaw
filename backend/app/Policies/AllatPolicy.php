<?php

namespace App\Policies;

use App\Models\Allat;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class AllatPolicy extends BasePolicy
{
    protected function isOwner(User $user, Allat $allat){
        return $allat->gazdi_id == $user->id;
    }

    public function create(User $user):Response{
        return $this->isAdmin($user)
        ? Response::allow()
        : Response::deny("Adminnak kell lennie!");
    }
}

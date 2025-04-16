<?php

namespace App\Policies;

use App\Models\Allat;
use App\Models\Dolgozo;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class AllatPolicy extends BasePolicy
{
    protected function isOwner(Dolgozo $dolgozo, Allat $allat){
        return $allat->gazdi_id == $dolgozo->id;
    }

    public function create(Dolgozo $dolgozo):Response{
        return $this->isAdmin($dolgozo)
        ? Response::allow()
        : Response::deny("Adminnak kell lennie!");
    }
}

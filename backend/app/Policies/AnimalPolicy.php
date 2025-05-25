<?php

namespace App\Policies;
use App\Models\Animal;
use App\Models\Worker;
use Illuminate\Auth\Access\Response;

class AllatPolicy extends BasePolicy
{
    protected function isOwner(Worker $worker, Animal $animal){
        return $animal->owner_id == $worker->id;
    }

    public function create(Worker $worker):Response{
        return $this->isAdmin($worker)
        ? Response::allow()
        : Response::deny("Adminnak kell lennie!");
    }
}

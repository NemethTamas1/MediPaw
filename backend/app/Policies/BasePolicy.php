<?php

namespace App\Policies;
use App\Models\Worker;

class BasePolicy
{
    protected function isAdmin(Worker $worker) {
        return $worker->role === 'admin';
    }
}

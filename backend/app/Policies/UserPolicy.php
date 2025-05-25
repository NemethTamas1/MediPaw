<?php

namespace App\Policies;
use App\Models\Worker;

class UserPolicy
{
    public function isDoctor(Worker $worker)
    {
        return "admin" == $worker->role && 'doctor' == $worker->post;
    }

    public function isAssistant(Worker $worker)
    {
        return "admin" == $worker->role && 'assistant' == $worker->post;
    }

    public function isCleaner(Worker $worker)
    {
        return "user" == $worker->role && 'cleaner' == $worker->post;
    }
}

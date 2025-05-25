<?php

namespace App\Models;

use App\Models\Rendelo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Laravel\Sanctum\HasApiTokens;

class Worker extends Authenticatable
{
    use HasFactory, HasApiTokens;

    public $timestamps = false;
    protected $table = "workers";
    protected $fillable = [
        "id",
        "name",
        "phone",
        "role",
        "post",
        "email",
        "password",
    ];

    public function clinics():BelongsToMany {
        return $this->belongsToMany(Clinic::class, "working", "worker_id", "clinic_id");
    }

    protected function casts(): array
    {
       return [
           'email_verified_at' => 'datetime',
           'password' => 'hashed',
       ];
    }

    protected $hidden = [
    'password',
    'remember_token',
    ];


    public function getRole(){
        return $this->role;
    }
    public function getPost(){
        return $this->post;
    }
}

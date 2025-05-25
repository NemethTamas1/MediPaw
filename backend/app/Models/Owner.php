<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Sanctum\HasApiTokens;

class Owner extends Model
{
    use HasFactory, HasApiTokens;

    public $timestamps = false;
    protected $table = "owners";
    protected $fillable = [
        "id",
        "name",
        "address",
        "phone",
        "email",
        "password"
    ];

    public function animals():HasMany{
        return $this->hasMany(Animal::class, "owner_id", "id");
    }
    protected $hidden = [
        'password'
    ];

    public function getRole(){
        return "owner";
    }
    public function getPost(){
        return null;
    }
}

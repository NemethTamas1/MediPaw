<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Sanctum\HasApiTokens;

class Gazdi extends Model
{
    use HasFactory, HasApiTokens;

    public $timestamps = false;
    protected $table = "gazdik";
    protected $fillable = [
        "id",
        "nev",
        "cim",
        "telefon",
        "email",
        "password"
    ];

    public function allatok():HasMany{
        return $this->hasMany(Allat::class, "gazdi_id", "id");
    }
    protected $hidden = [
        'password'
    ];

    public function getRole(){
        return "gazdi";
    }
    public function getBeosztas(){
        return null;
    }
}

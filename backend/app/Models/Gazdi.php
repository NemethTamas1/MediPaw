<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Gazdi extends Model
{
    use HasFactory;

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
}

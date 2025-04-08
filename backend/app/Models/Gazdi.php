<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gazdi extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "gazdik";
    protected $fillable = [
        "id",
        "nev",
        "cim",
        "telefon"
    ];
}

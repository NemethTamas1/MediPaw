<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orvos extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "orvosok";
    protected $fillable = [
        "id",
        "nev",
        "cim",
        "telefon"
    ];
}

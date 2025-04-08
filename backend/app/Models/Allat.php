<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allat extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "allatok";

    protected $fillable = [
        "id",
        "kor",
        "fajta",
        "gazdi_id",
        "oltva",
        "nev"
    ];
}

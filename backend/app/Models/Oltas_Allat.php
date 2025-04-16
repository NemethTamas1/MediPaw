<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oltas_Allat extends Model
{
    use HasFactory;

    protected $table = "oltas_allat";
    public $timestamps = false;
    protected $fillable = [
        "oltas_id",
        "allat_id",
        "datum",
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rendelo extends Model
{
    use HasFactory;

    protected $table = "rendelok";
    public $timestamps = false;
    protected $fillable = [
        "allat_id",
        "orvos_id",
        "cim",
        "nyit",
        "zar",
        "id"
    ];
}

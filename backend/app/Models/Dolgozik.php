<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dolgozik extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "dolgozik";

    protected $fillable = [
        "orvos_id",
        "rendelo_id"
    ];
}

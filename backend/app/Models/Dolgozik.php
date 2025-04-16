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
        "rendelo_id",
        "dolgozo_id",
    ];
}

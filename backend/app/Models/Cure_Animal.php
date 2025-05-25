<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cure_Animal extends Model
{
    use HasFactory;

    protected $table = "cure_animal";
    public $timestamps = false;
    protected $fillable = [
        "cure_id",
        "animal_id",
        "date",
    ];
}

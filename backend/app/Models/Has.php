<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Has extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "keepers";

    protected $fillable = [
        "animal_id",
        "keeper_id",
    ];
}

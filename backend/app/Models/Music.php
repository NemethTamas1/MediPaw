<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Music extends Model
{
    use HasFactory;

    public $table = "musics";

    public $timestamps = false;

    protected $fillable = [
        "format",
        "price"
    ];

    public function merch():MorphOne {
        return $this->morphOne(Merch::class, "merchable");
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Allat extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "allatok";

    protected $fillable = [
        "id",
        "nev",
        "kor",
        "fajta",
        "szin",
        "suly",
    ];

    public function gazdi():BelongsToMany{
        return $this->belongsToMany(Gazdi::class, "kezelesek", "allat_id", "dolgozo_id");
    }

    public function oltasok():BelongsToMany {
        return $this->belongsToMany(Oltas::class, "oltas_allat", "allat_id", "oltas_id");
    }
}

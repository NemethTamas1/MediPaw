<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Rendelo extends Model
{
    use HasFactory;

    protected $table = "rendelok";
    public $timestamps = false;
    protected $fillable = [
        "id",
        "kezeles_id",
        "allat_id",
        "gazdi_id",
        "dolgozo_id",
        "cim",
        "nyitvatartas"
    ];

    public function dolgozok():BelongsToMany {
        return $this->belongsToMany(Dolgozo::class, "dolgozik", "rendelo_id", "dolgozo_id");
    }

    public function allatok():BelongsToMany {
        return $this->belongsToMany(Allat::class, "kezelesek", "rendelo_id","allat_id");
    }
}

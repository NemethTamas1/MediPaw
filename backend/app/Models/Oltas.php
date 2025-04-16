<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Oltas extends Model
{
    use HasFactory;

    protected $table = "oltasok";
    public $timestamps = false;
    protected $fillable = [
        "id",
        "oltasTipus"
    ];

    public function allatok():BelongsToMany {
        return $this->belongsToMany(Allat::class, "oltas_allat", "oltas_id", "allat_id");
    }
}

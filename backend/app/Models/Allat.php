<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Allat extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "allatok";

    protected $fillable = [
        "id",
        "kor",
        "fajta",
        "gazdi_id",
        "oltva",
        "nev"
    ];

    public function gazdi():BelongsTo{
        return $this->belongsTo(Gazdi::class, "gazdi_id", "id");
    }
}

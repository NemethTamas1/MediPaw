<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kezeles extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "kezelesek";

    protected $fillable = [
        "id",
        "leiras",
        "allat_id",
        "datum",
        "rendelo_id",
        "kifizetve",
        "dolgozo_id",
    ];
}

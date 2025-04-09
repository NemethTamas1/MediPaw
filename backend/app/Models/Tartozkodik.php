<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tartozkodik extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "tartozkodik";

    protected $fillable = [
        "id",
        "allat_id",
        "rendelo_id",
        "leiras",
        "idopont",
        "kifizetve"
    ];
}

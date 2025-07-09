<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artist extends Model
{
    use HasFactory;

    public $table = "artists";

    public $timestamps = false;

    protected $fillable = [
        "name",
        "birth",
        "genre",
        "image_path"
    ];

    public function merches():HasMany {
        return $this->hasMany(Merch::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Merch extends Model
{
    use HasFactory;

    public $table = "merches";

    public $timestamps = false;

    protected $fillable = [
        "artist_id",
        "name",
        "description",
        "image_url",
        "type",
        "format",
        "price"
    ];

    public function merchable(): MorphTo
    {
        return $this->morphTo();
    }
}

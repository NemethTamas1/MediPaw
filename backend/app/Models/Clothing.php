<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Clothing extends Model
{
    use HasFactory;

    public $table = "clothing";

    public $timestamps = false;
    protected $fillable = [
        "name",
        "size",
        "sex",
        "color",
        "price",
    ];

    public function merch(): MorphOne
    {
        return $this->morphOne(Merch::class, 'merchable');
    }
}

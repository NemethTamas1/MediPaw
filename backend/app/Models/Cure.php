<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Cure extends Model
{
    use HasFactory;

    protected $table = "cures";
    public $timestamps = false;
    protected $fillable = [
        "id",
        "cureType"
    ];

    public function animals():BelongsToMany {
        return $this->belongsToMany(Animal::class, "cure_animal", "cure_id", "animal_id");
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Animal extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "animals";

    protected $fillable = [
        "id",
        "name",
        "age",
        "breed",
        "scolourzin",
        "weight",
    ];

    public function owner():BelongsToMany{
        return $this->belongsToMany(Owner::class, "treatments", "animal_id", "worker_id");
    }

    public function cures():BelongsToMany {
        return $this->belongsToMany(Cure::class, "cure_animal", "animal_id", "cure_id");
    }
}

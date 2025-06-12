<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
        "colour",
        "weight",
    ];

    public function keeper():BelongsToMany {
        return $this->belongsToMany(Keeper::class, 'has',  'animal_id', 'keeper_id');
    }
}

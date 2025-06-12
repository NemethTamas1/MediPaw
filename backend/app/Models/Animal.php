<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function keeper():BelongsTo {
        return $this->belongsTo(Keeper::class, 'animal_id', 'id');
    }
}

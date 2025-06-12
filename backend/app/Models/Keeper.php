<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Keeper extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "keepers";
    protected $fillable = [
        "name",
        "address",
        "phone",
        "email",
    ];

    public function animals(): BelongsToMany
    {
        return $this->belongsToMany(Animal::class, 'has', "keeper_id", "animal_id");
    }

    public function users():BelongsToMany
    {
        return $this->belongsToMany(User::class, 'serves', 'keeper_id', 'user_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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

    public function animals():HasMany {
        return $this->hasMany(Animal::class, "owner_id", "id");
    }
}

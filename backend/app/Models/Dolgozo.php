<?php

namespace App\Models;

use App\Models\Rendelo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Laravel\Sanctum\HasApiTokens;

class Dolgozo extends Authenticatable
{
    use HasFactory, HasApiTokens;

    public $timestamps = false;
    protected $table = "dolgozok";
    protected $fillable = [
        "id",
        "name",
        "telefon",
        "role",
        "beosztas",
        "email",
        "password",
    ];

    public function rendelok():BelongsToMany {
        return $this->belongsToMany(Rendelo::class, "dolgozik", "dolgozo_id", "rendelo_id");
    }

    protected function casts(): array
    {
       return [
           'email_verified_at' => 'datetime',
           'password' => 'hashed',
       ];
    }

    protected $hidden = [
    'password',
    'remember_token',
    ];
}

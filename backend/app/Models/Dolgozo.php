<?php

namespace App\Models;

use App\Models\Rendelo;
use Auth;
use Illuminate\Contracts\Auth\Middleware\AuthenticatesRequests;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Laravel\Sanctum\HasApiTokens;

class Dolgozo extends Model
{
    use HasFactory, HasApiTokens;

    public $timestamps = false;
    protected $table = "dolgozok";
    protected $fillable = [
        "id",
        "nev",
        "telefon",
        "role",
        "beosztas"
    ];

    public function rendelok():BelongsToMany {
        return $this->belongsToMany(Rendelo::class, "dolgozik", "dolgozo_id", "rendelo_id");
    }
}

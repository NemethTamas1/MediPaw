<?php

namespace App\Models;

use Auth;
use Illuminate\Contracts\Auth\Middleware\AuthenticatesRequests;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Orvos extends Model
{
    use HasFactory, HasApiTokens;

    public $timestamps = false;
    protected $table = "orvosok";
    protected $fillable = [
        "id",
        "nev",
        "cim",
        "telefon"
    ];
}

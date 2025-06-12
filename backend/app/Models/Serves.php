<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serves extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "keepers";

    protected $fillable = [
        'keeper_id',
        'user_id'
    ];

    
}

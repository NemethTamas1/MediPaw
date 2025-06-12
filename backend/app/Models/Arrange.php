<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arrange extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "arranges";

    protected $fillable = [
        'animal_id',
        'price',
        'description'
    ];
}

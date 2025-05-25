<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Working extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "working";

    protected $fillable = [
        "clinic_id",
        "worker_id",
    ];
}

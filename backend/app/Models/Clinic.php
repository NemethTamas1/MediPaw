<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Clinic extends Model
{
    use HasFactory;

    protected $table = "clinics";
    public $timestamps = false;
    protected $fillable = [
        "id",
        "name",
        "address",
        "openingHours",
    ];

    public function workers():BelongsToMany {
        return $this->belongsToMany(Worker::class, "working", "clinic_id", "worker_id");
    }

    public function animals():BelongsToMany {
        return $this->belongsToMany(Animal::class, "treatments", "clinic_id","animal_id");
    }
}

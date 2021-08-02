<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthProfessional extends Model
{
    use HasFactory;

    /**
     * Dose
     */
    public function doses(){
        return $this->hasMany(Dose::class);
    }
}

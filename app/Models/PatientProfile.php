<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientProfile extends Model
{
    use HasFactory;

    /**
     * Dose
     */
    public function covid(){
        return $this->hasMany(Covid::class);
    }
}

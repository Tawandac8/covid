<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Covid extends Model
{
    use HasFactory;

    /**
     * doses on the card
     */
    public function doses(){
        return $this->hasMany(Dose::class);
    }

    /**
     * Patient
     */

     public function patient(){
         return $this->belongsTo(PatientProfile::class);
     }
}

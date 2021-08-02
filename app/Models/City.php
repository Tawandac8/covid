<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    /**
     * Health Facilities
     */

     public function healthFacilities(){
         return $this->hasMany(HealthFacility::class);
     }

     
}

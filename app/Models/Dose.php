<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dose extends Model
{
    use HasFactory;

    protected $fillable = [
        'dose_number',
        'health_professional_id',
        'health_facility_id',
        'vaccine_id',
        'patient_profile_id'
    ];

    /**
     * @return Vaccine card
     */

    public function covid(){
        return $this->belongsTo(Covid::class);
    }

    /**
     * @return Health professional
     */

     public function healthProfessional(){
         return $this->belongsTo(HealthProfessional::class);
     }

     /**
      * @return Health Facility
      */

      public function healthFacility(){
          return $this->belongsTo(HealthFacility::class);
      }

      /**
       * vaccine
       */

       public function vaccine(){
           return $this->belongsTo(Vaccine::class);
       }
}

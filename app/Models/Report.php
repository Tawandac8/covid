<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'id_no',
        'dose_no',
        'health_facility_id'
    ];

    /**
     * hospital
     */

     public function health_facility(){
         return $this->belongsTo(HealthFacility::class);
     }
}

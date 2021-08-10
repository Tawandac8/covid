<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthProfessional extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'title',
        'phone',
        'qualifications',
        'health_facility_id',
        'user_id'
    ];

    /**
     * Dose
     */
    public function doses(){
        return $this->hasMany(Dose::class);
    }

    public function healthFacility(){
        return $this->belongsTo(HealthFacility::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }
}

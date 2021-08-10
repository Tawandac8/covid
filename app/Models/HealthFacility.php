<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthFacility extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'city_id'
    ];

    /**
     * Dose
     */
    public function doses(){
        return $this->hasMany(Dose::class);
    }

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function professionals(){
        return $this->hasMany(HealthProfessional::class);
    }
}

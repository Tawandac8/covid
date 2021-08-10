<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientProfile extends Model
{
    use HasFactory;

    protected $fillable = [
    'first_name',
    'last_name',
    'id_number',
    'age',
    'phone',
    'address',
    'city_id',
    'covid_id',
    'history'
    ];

    /**
     * Dose
     */
    public function covid(){
        return $this->hasMany(Covid::class);
    }

    public function city(){
        return $this->belongsTo(City::class);
    }
}

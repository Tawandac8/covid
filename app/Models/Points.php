<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Points extends Model
{
    use HasFactory;

    protected $fillable = [
        'health_facility_id'
    ];

    public function facility(){
        return $this->belongsTo(HealthFacility::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'country_of_origin',
        'efficacy',
        'batch_number'
    ];

    /**
     * Dose
     */

     public function doses(){
         return $this->hasMany(Dose::class);
     }
}

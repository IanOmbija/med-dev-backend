<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'tbl_service';
    public function patients()
{
    return $this->belongsToMany(Patient::class, 'tbl_patient_services');
}
}

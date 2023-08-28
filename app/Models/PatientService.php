<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientService extends Model
{
    protected $table = 'tbl_patient_services';
    public function patient()
{
    return $this->belongsTo(Patient::class);
}

public function service()
{
    return $this->belongsTo(Service::class);
}

}

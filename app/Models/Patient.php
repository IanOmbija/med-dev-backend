<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'tbl_patient';
    protected $fillable = ['name', 'date_of_birth', 'gender_id', 'service_id', 'comments'];
    protected $appends = ['service_count'];

    public function gender()
{
    return $this->belongsTo(Gender::class);
}

public function services()
{
    return $this->hasMany(PatientService::class, 'service_id');
}

public function getServiceCountAttribute()
{
    return $this->services->count();
}

}

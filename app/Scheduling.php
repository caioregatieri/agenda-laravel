<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scheduling extends Model
{
    //
    protected $fillable = ['user_id','doctor_id','patient_id','date','time','status'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function doctor()
    {
        return $this->belongsTo('App\Doctor');
    }

    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }
}

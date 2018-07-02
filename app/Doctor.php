<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //
    protected $fillable = ['name','phone','specialty'];

    public function schedulings()
    {
        return $this->hasMany('App\Scheduling');
    }
}

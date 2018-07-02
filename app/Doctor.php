<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //
    public function schedulings()
    {
        return $this->hasMany('App\Scheduling');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //
    public function schedulings()
    {
        return $this->hasMany('App\Scheduling');
    }
}

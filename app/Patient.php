<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //
    protected $fillable = ['name','phone','city','state','place','number','neighborhood'];

    public function schedulings()
    {
        return $this->hasMany('App\Scheduling');
    }
}

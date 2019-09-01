<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    public function protocol()
    {
        return $this->hasMany('App\Protocol');
    }
}

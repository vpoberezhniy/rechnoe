<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Protocol extends Model
{
    public function house()
    {
        return $this->belongsTo('App\House', 'id');
    }

//    public function house($house)
//    {
//        return in_array( $house, array_pluck( $this->house->toArray(), 'name') );
//    }
}

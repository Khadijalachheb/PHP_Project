<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    public function aal(){
        return $this->belongsTo('App\AAL');
        }
}

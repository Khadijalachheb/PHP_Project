<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    public function admin(){
        return $this->hasOne('App\Admin');
        }
 public function aal(){
            return $this->belongsTo('App\AAL');
 }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public function email(){
        return $this->belongsTo('App\Email');
        }

  public function role(){
            return $this->belongsTo('App\Role');
            }
}

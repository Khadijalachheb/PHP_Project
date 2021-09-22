<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AAL extends Model
{
    public function email(){
        return $this->hasOne('App\Email');
        }

        public function logs(){
            return $this->hasMany("App/Log");
            }
}

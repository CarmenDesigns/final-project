<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JopType extends Model
{
    public function job(){
        return $this->hasMany("App\JobType");
    }

}

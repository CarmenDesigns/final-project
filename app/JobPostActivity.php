<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobPostActivity extends Model
{
    public function activity(){
        return $this->hasMany("App\Activity");
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class job_location extends Model
{
    public function jobLocation(){
        return $this->hasOne ("App\Job");
    }
}

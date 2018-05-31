<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobPostSkillSet extends Model
{
    public function skillSet(){
        return $this->hasMany("App\JobPostSkillSet");
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill_Set extends Model
{
    public function skillSet(){
        return $this->hasMany("App/Seeker_Skill_Set");
    }

    public function JobPostSkillSet(){
        return $this->hasMany("App/JobPostSkillSet");
    }
}

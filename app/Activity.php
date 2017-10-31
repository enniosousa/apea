<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model {

    protected $fillable = ['name', 'speaker', 'description', 'type', 'vacancies', 'place', ];
    protected $appends = ['enroleds'];

    public function getEnroledsAttribute() {
        return $this->enrols()->count();
    }

    public function enrols() {
        return $this->hasMany('\App\Enrol', 'activity_id', 'id');
    }
    
    public function dates() {
        return $this->hasMany('\App\ActivityDate', 'activity_id', 'id');
    }

}

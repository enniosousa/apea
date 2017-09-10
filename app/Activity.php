<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model {

    protected $appends = ['data', 'enroleds'];
    protected $dates = ['date'];

    public function getDataAttribute() {
        return $this->date->format('d/m/Y \à\s H:m');
    }

    public function getEnroledsAttribute() {
        return $this->enrols()->count();
    }

    public function enrols() {
        return $this->hasMany('\App\Enrol', 'activity_id', 'id');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityDate extends Model {

    protected $table = 'activities_dates';
    protected $attributes = ['start', 'end'];
    protected $dates = ['start', 'end'];

}

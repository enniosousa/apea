<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable {

    use Notifiable;
    use EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'fat_register', 'pagseguro_status_code', 'pagseguro_status_name', 'pagseguro_value'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function enrols() {
        return $this->belongsToMany('App\Activity', 'enrols', 'user_id', 'activity_id')
                        ->withPivot('present')
                        ->withTimestamps();
    }
    
    public function enrolsIds(){
        $userEnrols = [];
        foreach ($this->enrols as $enrol) {
            $userEnrols[] = $enrol->id;
        }
        return $userEnrols;
    }

    public function enrolCancel(){
        //cancelar inscrição nas atividades
        $this->enrols()->sync([]);

        //remover informações do pagseguro
        $this->pagseguro_code = null;
        $this->pagseguro_link = null;
        $this->pagseguro_status_code = null;
        $this->pagseguro_status_name = null;
        $this->pagseguro_value = null;
        return $this->save();
    }

}

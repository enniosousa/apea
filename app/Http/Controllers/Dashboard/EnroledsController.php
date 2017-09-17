<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EnroledsController extends Controller {
    public function index(){
      $enroleds = \DB::table('enrols')
        ->select([
          'enrols.id as enrol_id',
          'enrols.present as enrol_present',
          'users.name as user_name',
					'users.pagseguro_value as value',
          'users.fat_register as fat_register',
          'users.pagseguro_status_name as pagseguro_status_name',
	        'activities.name as activity_name',
        ])
        ->join('activities', 'activities.id', '=', 'enrols.activity_id')
        ->join('users', 'users.id', '=', 'enrols.user_id')
        ->get();      
        return view('dashboard.enroleds.index', ['enroleds'=> $enroleds]);
    }
	
	public function update(Request $request){
		$enrol = \App\Enrol::find($request->get('id', null));
		
		if(!$enrol){
			
		}
		
		$enrol->present = ! $enrol->present;
		$enrol->save();
		
		$btnClass = $enrol->present ? 'btn btn-danger' : 'btn btn-primary' ;
		$btnText = $enrol->present ? 'Cancelar presença' : 'Confirmar presença' ;
		
		return "$('#btn-{$enrol->id}').loading('stop').removeClass().addClass('$btnClass').text('$btnText');";
	}
}

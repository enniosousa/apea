<?php

namespace App\Http\Controllers\Certificate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CertificateController extends Controller
{
    public function index(){
        $questions = \App\Question::get();
        $answers = \App\Answer::get();
        
        return view('pages.certificate.index', [
            'activities'=> $this->getCertificate($where = [['users.id', '=', \Auth::user()->id]]),
            'questions'=> $questions,
            'answers'=> $answers,
        ]);
    }
    public function validateCertificate(Request $request){
        $code = $request->input('code', null);
        if($code){
            $where = [
                ['enrols.code', '=', $code],
                ['enrols.present', '=', 1]
            ];
            $activity = $this->getCertificate($where)->first();
        }
        return view('pages.certificate.validateCertificate', [
            'activity'=> isset($activity) ? $activity : null,
            'code'=> $code,
        ]);
        
    }
    public function apiCertificate(Request $request){
        $code = $request->input('code', null);
        if($code){
            $where = [
                ['enrols.code', '=', $code],
                ['enrols.present', '=', 1]
            ];
            return response()->json($this->getCertificate($where)->first());
        }
        return response()->json(null);
    }
    private function getCertificate(Array $where = []){
        return \DB::table('enrols')
                ->join('users', 'users.id', 'enrols.user_id')
                ->join('activities', 'activities.id', 'enrols.activity_id')
                ->where($where)
                ->select([
                    'users.name as participant_name',
                    'enrols.code as enrol_code',
                    'enrols.present as is_present',
                    'activities.id as activity_id',
                    'activities.name as activity_name',
                    'activities.type as activity_type',
                ])
                ->get()
                ->each(function($item, $key){
                    //datas das atividades
                    $dates = \DB::table('activities_dates')->where('activity_id', $item->activity_id)->get(['start', 'end']);
                    foreach($dates as $date){
                        $item->dates[] = \Carbon\Carbon::createFromFormat("Y-m-d H:m:s", $date->start)->format('d/m/Y');
                    }
                    
                    //remover o ID da atividade
                    unset($item->activity_id);
                    
                    //bolleano ao invés de binario
                    $item->is_present = $item->is_present ? true : false;
                });
    }
}

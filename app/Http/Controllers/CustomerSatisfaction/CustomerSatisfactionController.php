<?php

namespace App\Http\Controllers\CustomerSatisfaction;

//use Illuminate\Http\Request;
use App\Http\Requests\CustomerSatisfaction\CustomerSatisfactionRequest;
use App\Http\Controllers\Controller;

class CustomerSatisfactionController extends Controller
{
    public function store(CustomerSatisfactionRequest $request){
        //
        if($request->button == 'skip'){
            \App\QuestionAnswer::firstOrCreate([
                    'user_id' => (string) \Auth::user()->id, 
                    'question_id' => 1,
                    'answer_id'=> 1,
                ]);
        }
        else{
           foreach($request->questions as $question => $answer){
                $instace = \App\QuestionAnswer::firstOrCreate([
                    'user_id' => (string) \Auth::user()->id, 
                    'question_id' => (string) $question,
                    'answer_id'=> $answer,
                ]);
            }
        }
        return redirect()->action('Certificate\CertificateController@index');
    }
}

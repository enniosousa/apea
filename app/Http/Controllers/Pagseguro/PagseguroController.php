<?php

namespace App\Http\Controllers\Pagseguro;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagseguroController extends Controller {

    public static function notification($information) {        
        \App\Pagseguro\Notification::updateOrCreate([
                'code' => $information->getCode(),
                'reference' => $information->getReference()
        ]);

        $u = \App\User::find($information->getReference());
        $u->pagseguro_status_code = $information->getStatus()->getCode();
        $u->pagseguro_status_name = $information->getStatus()->getName();
        $u->save();
        
        
        $message = (new \App\Mail\PaymentConfirmation())->with([
            'name'=> $u->name,
        ]);

        \Mail::to($u->email)->queue($message);
    }
  
  public static function checkout(){
    $data = [
        'items' => [
            [
                'id' => '1',
                'description' => 'Ingresso da Semana SER 2018',
                'quantity' => '1',
                'amount' => \App\Discount::total(),
                'maxAge' => 86400 * 2, //86400 = 1 dia
            ]
        ],
        'reference' => \Auth::user()->id,
        'sender' => [
            'email' => \Auth::user()->email,
            'name' => \Auth::user()->name,
        ]
    ];

    $checkout = \PagSeguro::checkout()->createFromArray($data);
    $credentials = \PagSeguro::credentials()->get();
    $information = $checkout->send($credentials); // Retorna um objeto de laravel\pagseguro\Checkout\Information\Information
    //dd($information);
    $u = \Auth::user();
    $u->pagseguro_code = $information->getCode();
    $u->pagseguro_link = $information->getLink();
    $u->pagseguro_value = \App\Discount::total();
    $u->save();
      
    $message = (new \App\Mail\EnrolConfirmationMail())->with([
        'name'=> \Auth::user()->name,
        'pagseguro_payment_link' => $information->getLink()
    ]);

    \Mail::to(\Auth::user()->email)->queue($message);
  }
  
  public function redirect(){
    return redirect()->route('public.ticket');
  }

}

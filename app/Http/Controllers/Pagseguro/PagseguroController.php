<?php

namespace App\Http\Controllers\Pagseguro;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagseguroController extends Controller {

    public function notification($information) {
        dd($information);
        
        $code = \Input::get('transaction_id', null);
        if ($code) {
            $credentials = \PagSeguro::credentials()->get();
            $transaction = \PagSeguro::transaction()->get($code, $credentials);
            $information = $transaction->getInformation();
            dd([
                'code' => $information->getCode(),
                'reference' => $information->getReference()
            ]);
        }
        dd('sem transaction_id');
    }

}

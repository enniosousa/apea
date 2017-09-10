<?php

namespace App\Http\Controllers\Enrol;

use Illuminate\Http\Request;
use App\Http\Requests\Enrol\EnrolRequest;
use App\Http\Controllers\Controller;

class EnrolController extends Controller {

    public function create(EnrolRequest $request) {
        \Auth::user()->enrols()->sync($request->activities);
        \App\Http\Controllers\Pagseguro\PagseguroController::checkout();
        flash('Inscrição realizada com sucesso! Agora basta clickar no botão para efetuar o pagamento e garantir a sua vaga.')->success();
        return redirect()->back();
    }

    public function update(EnrolRequest $request) {
        //dd($request->all());
        \Auth::user()->enrols()->sync($request->activities);
        flash('Inscrição atualizada com sucesso!')->success();
        return redirect()->back();
    }

}

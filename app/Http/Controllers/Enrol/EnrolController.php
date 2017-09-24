<?php

namespace App\Http\Controllers\Enrol;

use Illuminate\Http\Request;
use App\Http\Requests\Enrol\EnrolRequest;
use App\Http\Controllers\Controller;

class EnrolController extends Controller {

    public function create(EnrolRequest $request) {
        $activities = array_merge(array_values($request->Palestra), [$request->Minicurso]);
        \Auth::user()->enrols()->sync($activities);
        \App\Http\Controllers\Pagseguro\PagseguroController::checkout();
        flash('Inscrição realizada com sucesso! Agora basta clickar no botão para efetuar o pagamento e garantir a sua vaga.')->success();
        return redirect()->back();
    }

    public function update(EnrolRequest $request) {
        $activities = array_merge(array_values($request->Palestra), [$request->Minicurso]);
        \Auth::user()->enrols()->sync($activities);
        flash('Inscrição atualizada com sucesso!')->success();
        return redirect()->back();
    }

}

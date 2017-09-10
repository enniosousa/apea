<?php

namespace App\Http\Controllers\Enrol;

use Illuminate\Http\Request;
use App\Http\Requests\Enrol\EnrolRequest;
use App\Http\Controllers\Controller;

class EnrolController extends Controller {

    public function create(EnrolRequest $request) {
        //dd($request->all());
        \Auth::user()->enrols()->sync($request->activities);
        flash('Inscrição realizada com sucesso!')->success();
        return redirect()->back();
    }

    public function update(EnrolRequest $request) {
        //dd($request->all());
        \Auth::user()->enrols()->sync($request->activities);
        flash('Inscrição atualizada com sucesso!')->success();
        return redirect()->back();
    }

}

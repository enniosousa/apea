<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicPagesController extends Controller {

    public function index() {
        return view('pages.index');
    }

    public function home() {
        return redirect()->action('PublicPagesController@ticket');
    }

    public function editions() {
        return view('pages.editions');
    }

    public function contributors() {
        return view('pages.contributors');
    }
    
    public function pitchContestTeams(){
        return view('pages.pitchContestTeams');
    }

    public function ticket() {
        return view('pages.ticket');
    }
    
    public function endEnrols(){
        return view('pages.endEnrols');
    }

}

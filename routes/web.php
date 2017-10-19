<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::group(['as' => 'public.'], function() {
    Route::get('/', ['as' => 'index', 'uses' => 'PublicPagesController@index']);
    Route::get('/home', ['as' => 'index', 'uses' => 'PublicPagesController@home']);
    Route::get('/edicoes', ['as' => 'editions', 'uses' => 'PublicPagesController@editions']);
    Route::get('/colaboradores', ['as' => 'contributors', 'uses' => 'PublicPagesController@contributors']);
    Route::get('/times-do-concurso-de-ideias-inovadoras', ['as' => 'pitchContestTeams', 'uses' => 'PublicPagesController@pitchContestTeams']);
    Route::get('/inscricao', ['as' => 'ticket', 'middleware' => 'auth', 'uses' => 'PublicPagesController@ticket']);
    Route::post('/inscricao/inscrever-se', ['as' => 'enrol.create', 'middleware' => 'auth', 'uses' => 'Enrol\EnrolController@create']);
    Route::put('/inscricao/alterar', ['as' => 'enrol.update', 'middleware' => 'auth', 'uses' => 'Enrol\EnrolController@update']);
});
Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'middleware' => ['auth', 'role:admin']], function() {
    Route::get('', ['as' => 'home.index', 'uses' => 'Dashboard\HomeController@index']);

    //inscritos
    Route::get('/inscritos', ['as' => 'enroleds.index', 'uses' => 'Dashboard\EnroledsController@index']);
    Route::get('/inscrito/atualizar', ['as' => 'enroleds.update', 'uses' => 'Dashboard\EnroledsController@update']);
    
    
    //log viewer
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
});

Auth::routes();


Route::group(['as' => 'pagseguro.', 'prefix' => 'pagseguro'], function() {
    Route::get('redirect', ['as' => 'redirect', 'uses' => 'Pagseguro\PagseguroController@redirect']);
    Route::post('notification', ['as' => 'notification', 'uses' => '\laravel\pagseguro\Platform\Laravel5\NotificationController@notification']);
});

Route::get('test', function(){
    $a = \App\Activity::
        join('enrols','enrols.activity_id', 'activities.id')
        ->join('users', 'users.id', 'enrols.user_id')
        ->select([
            'activities.name as activity_name',
            'activities.type as activity_type',
            'users.name as enroled_name',
            'users.email as enroled_email',
            'activities.id', //necessário para pegar as datas da atividade
        ])
        ->get();
    
    $pdf = PDF::loadView('certificates.student.index', ['data'=> $a[2]])->setPaper('a4', 'landscape');
    return $pdf->stream('certificado.pdf');
    return view('certificates.student.index');
});



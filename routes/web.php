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
    Route::get('/inscricao', ['as' => 'ticket', 'middleware' => 'auth', 'uses' => 'PublicPagesController@ticket']);
    Route::post('/inscricao/inscrever-se', ['as' => 'enrol.create', 'middleware' => 'auth', 'uses' => 'Enrol\EnrolController@create']);
    Route::put('/inscricao/alterar', ['as' => 'enrol.update', 'middleware' => 'auth', 'uses' => 'Enrol\EnrolController@update']);
});

Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'middleware' => ['auth', 'role:admin']], function() {
    Route::get('', ['as' => 'home.index', 'uses' => 'Dashboard\HomeController@index']);

    //inscritos
    Route::get('/inscritos', ['as' => 'enroleds.index', 'uses' => 'Dashboard\EnroledsController@index']);
    Route::get('/inscrito/atualizar', ['as' => 'enroleds.update', 'uses' => 'Dashboard\EnroledsController@update']);
});

Auth::routes();


Route::group(['as' => 'pagseguro.', 'prefix' => 'pagseguro'], function() {
    Route::get('redirect', ['as' => 'redirect', 'uses' => 'Pagseguro\PagseguroController@redirect']);
    Route::post('notification', ['as' => 'notification', 'uses' => '\laravel\pagseguro\Platform\Laravel5\NotificationController@notification']);
});

Route::get('test', function() {
    $atividades = [
        /*
         * Palestras
         */
        (object) [
            'name' => 'Detecção e prevenção de anomalias e ataque',
            'speaker' => 'Mariano Sumrell Miranda',
            'description' => '',
            'type' => 'Palestra',
            'vacancies' => '200',
            'date' => [
                ['start' => '2017-10-23 19:00', 'end' => '2017-10-23 20:40'],
            ],
            'place' => 'Auditório',
        ],
        (object) [
            'name' => 'PHP moderno',
            'speaker' => 'Jonatas Weber',
            'description' => '',
            'type' => 'Palestra',
            'vacancies' => '200',
            'date' => [
                ['start' => '2017-10-23 20:50', 'end' => '2017-10-23 22:30'],
            ],
            'place' => 'Auditório',
        ],
        (object) [
            'name' => 'Mesa Redonda: TI para a Sociedade',
            'speaker' => '',
            'description' => '',
            'type' => 'Palestra',
            'vacancies' => '200',
            'date' => [
                ['start' => '2017-10-24 18:30', 'end' => '2017-10-24 20:40'],
            ],
            'place' => 'Auditório',
        ],
        (object) [
            'name' => 'Automação Residencial',
            'speaker' => 'Prof. Weber Costa Pinto dos Anjos',
            'description' => '',
            'type' => 'Palestra',
            'vacancies' => '200',
            'date' => [
                ['start' => '2017-10-24 20:50', 'end' => '2017-10-24 22:30'],
            ],
            'place' => 'Auditório',
        ],
        /*
         * Minicursos
         */
        (object) [
            'name' => 'Redes SDN',
            'speaker' => 'Prof. Eber da Silva de Santana',
            'description' => 'Explorar as vantagens que as redes SDN tem a oferecer. Desejável que os participantes possuam um conhecimento prévio em linux e redes de computadores e habilidades em virtualização.',
            'type' => 'Minicurso',
            'vacancies' => '30',
            'date' => [
                ['start' => '2017-10-23 20:50', 'end' => '2017-10-23 22:30'],
                ['start' => '2017-10-24 18:30', 'end' => '2017-10-24 20:40'],
            ],
            'place' => 'Laboratório 1',
        ],
        (object) [
            'name' => 'Computação em nuvem orientado a serviço',
            'speaker' => 'Vagner Oliveira Pimentel Pereira',
            'description' => '',
            'type' => 'Minicurso',
            'vacancies' => '30',
            'date' => [
                ['start' => '2017-10-23 20:50', 'end' => '2017-10-23 22:30'],
                ['start' => '2017-10-24 18:30', 'end' => '2017-10-24 20:40'],
            ],
            'place' => 'Laboratório 2',
        ],
        (object) [
            'name' => 'Big Data: Aplicações e ferramentoas',
            'speaker' => 'Erik Marques',
            'description' => '',
            'type' => 'Minicurso',
            'vacancies' => '30',
            'date' => [
                ['start' => '2017-10-23 18:30', 'end' => '2017-10-23 20:40'],
                ['start' => '2017-10-24 20:50', 'end' => '2017-10-24 22:30'],
            ],
            'place' => 'Sala X',
        ],
        (object) [
            'name' => 'Laravel',
            'speaker' => 'Ennio José Freitas Sousa',
            'description' => 'Desenvolver uma pequena aplicação com o Laravel, um framework poderoso da linguagem PHP.',
            'type' => 'Minicurso',
            'vacancies' => '30',
            'date' => [
                ['start' => '2017-10-23 18:30', 'end' => '2017-10-23 20:40'],
                ['start' => '2017-10-24 20:50', 'end' => '2017-10-24 22:30'],
            ],
            'place' => 'Laboratório 1',
        ],
        (object) [
            'name' => 'Gamificação',
            'speaker' => '',
            'description' => '',
            'type' => 'Minicurso',
            'vacancies' => '30',
            'date' => [
                ['start' => '2017-10-23 18:30', 'end' => '2017-10-23 20:40'],
                ['start' => '2017-10-24 20:50', 'end' => '2017-10-24 22:30'],
            ],
            'place' => 'Laboratório 2',
        ],
        (object) [
            'name' => 'Configuração de Serviço DHCP com Linux',
            'speaker' => 'Prof. Kleverton Moises Silva',
            'description' => 'Compreender o funcionamento e configuração do serviço DHCP em servidores Linux.',
            'type' => 'Minicurso',
            'vacancies' => '30',
            'date' => [
                ['start' => '2017-10-24 18:30', 'end' => '2017-10-24 20:40'],
            ],
            'place' => 'Sala X',
        ],
    ];

    dd($atividades);
});

<?php

use Illuminate\Database\Seeder;

class ActivitiesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $atividades = [
            /*
             * Palestras
             */
            [
                'name' => 'Detecção e prevenção de anomalias e ataque',
                'speaker' => 'Mariano Sumrell Miranda',
                'description' => '',
                'type' => 'Palestra',
                'vacancies' => '200',
                'date' => \Carbon\Carbon::parse('2017-10-23'),
            ],
            [
                'name' => 'PHP moderno',
                'speaker' => 'Jonatas Weber',
                'description' => '',
                'type' => 'Palestra',
                'vacancies' => '200',
                'date' => \Carbon\Carbon::parse('2017-10-23'),
            ],
            [
                'name' => 'Mesa Redonda: TI para a Sociedade',
                'speaker' => '',
                'description' => '',
                'type' => 'Palestra',
                'vacancies' => '200',
                'date' => \Carbon\Carbon::parse('2017-10-24'),
            ],
            [
                'name' => 'Automação Residencial',
                'speaker' => 'Prof. Weber Costa Pinto dos Anjos',
                'description' => '',
                'type' => 'Palestra',
                'vacancies' => '200',
                'date' => \Carbon\Carbon::parse('2017-10-24'),
            ],
            /*
             * Minicursos
             */
            [
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
            [
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
            [
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
            [
                'name' => 'Laravel',
                'speaker' => 'Ennio José Freitas Sousa',
                'description' => 'Desenvolver uma pequena aplicação com o Laravel, um framework poderoso da linguagem PHP.',
                'type' => 'Minicurso',
                'vacancies' => '30',
                'date' => [
                    ['start' => '2017-10-23 18:30', 'end' => '2017-10-23 20:50'],
                    ['start' => '2017-10-24 20:50', 'end' => '2017-10-24 22:30'],
                ],
                'place' => 'Laboratório 1',
            ],
            [
                'name' => 'Gamificação',
                'speaker' => '',
                'description' => '',
                'type' => 'Minicurso',
                'vacancies' => '30',
                'date' => [
                    ['start' => '2017-10-23 18:30', 'end' => '2017-10-23 20:50'],
                    ['start' => '2017-10-24 20:50', 'end' => '2017-10-24 22:30'],
                ],
                'place'=> 'Laboratório 2',
            ],
            [
                'name' => 'Configuração de Serviço DHCP com Linux',
                'speaker' => 'Prof. Kleverton Moises Silva',
                'description' => 'Compreender o funcionamento e configuração do serviço DHCP em servidores Linux.',
                'type' => 'Minicurso',
                'vacancies' => '30',
                'date' => \Carbon\Carbon::parse('2017-10-'),
            ],
                /* [
                  'name'=> '',
                  'speaker'=> '',
                  'description'=> '',
                  'type'=> 'Minicurso',
                  'vacancies'=> '30',
                  'date'=> \Carbon\Carbon::parse('2017-10-'),
                  ], */
        ];

        foreach ($atividades as $atividade) {
            \App\Activity::create($atividade);
        }
    }

}

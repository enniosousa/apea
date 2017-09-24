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
                'date' => [
                    ['start' => '2017-10-23 19:00', 'end' => '2017-10-23 20:40'],
                ],
                'place' => 'Auditório',
            ],
            [
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
            [
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
            [
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
                'name' => 'Introdução ao Cloud Computer',
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
                'name' => 'Fundamentos de Big Data',
                'speaker' => 'Erik Marques',
                'description' => 'Apresentar fundamentos e conceitos de Big Data',
                'type' => 'Minicurso',
                'vacancies' => '30',
                'date' => [
                    ['start' => '2017-10-23 18:30', 'end' => '2017-10-23 20:40'],
                    ['start' => '2017-10-24 20:50', 'end' => '2017-10-24 22:30'],
                ],
                'place' => 'Sala X',
            ],
            [
                'name' => 'PYTHON - Introdução ao Desenvolvimento de Aplicações com Python',
                'speaker' => 'Aecio Pereira Santiago Junior',
                'description' => 'Ser capaz de resolver problemas através da interpretação de cenários do mundo real, modelando soluções através de modelos e programas e implementando as soluções através de programas de computador escritos na linguagem Python.',
                'type' => 'Minicurso',
                'vacancies' => '30',
                'date' => [
                    ['start' => '2017-10-23 18:30', 'end' => '2017-10-23 20:40'],
                    ['start' => '2017-10-24 20:50', 'end' => '2017-10-23 22:30'],
                ],
                'place' => 'Laboratório 2',
            ],
            [
                'name' => 'Laravel - Introdução para iniciantes',
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
            [
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

        foreach ($atividades as $atividade) {
            $dates = $atividade['date'];
            unset($atividade['date']);
            $activity = \App\Activity::create($atividade);
            
            foreach ($dates as $date) {
                $activity->dates()->create([
                  'start' => \Carbon\Carbon::createFromFormat('Y-m-d H:i', $date['start']), 
                  'end' => \Carbon\Carbon::createFromFormat('Y-m-d H:i', $date['end'])
                ]);
            }
        }
    }

}

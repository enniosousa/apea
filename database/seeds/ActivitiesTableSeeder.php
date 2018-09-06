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
                'name' => 'Contribuição da Industria 4.0 para a tecnologia Social',
                'speaker' => 'Dra. Cristiane Agra Pimentel',
                'description' => '',
                'type' => 'Palestra',
                'vacancies' => '200',
                'date' => [
                    ['start' => '2018-10-22 19:00', 'end' => '2018-10-22 20:20'],
                ],
                'place' => 'Auditório',
            ],
            [
                'name' => 'O profissional do Futuro na Indústria',
                'speaker' => 'Marcelo Franco (Gerente Executivo da Pirelli)',
                'description' => '',
                'type' => 'Palestra',
                'vacancies' => '200',
                'date' => [
                    ['start' => '2018-10-22 20:40', 'end' => '2018-10-22 22:00'],
                ],
                'place' => 'Auditório',
            ],
            /*
             * Minicursos
             * de laboratórios
             */
            [
                'name' => 'Arduino',
                'speaker' => 'João Ronaldo Tavares de Vasconcellos Júnior',
                'description' => '',
                'type' => 'Minicurso',
                'vacancies' => '30',
                'date' => [
                    ['start' => '2018-10-23 18:30', 'end' => '2018-10-23 22:00'],
                    ['start' => '2018-10-24 18:30', 'end' => '2018-10-24 22:00'],
                ],
                'place' => 'Laboratório 1',
            ],
            [
                'name' => 'Excel',
                'speaker' => 'Arivaldo Ferreira Brito',
                'description' => '',
                'type' => 'Minicurso',
                'vacancies' => '30',
                'date' => [
                    ['start' => '2018-10-23 18:30', 'end' => '2018-10-23 22:00'],
                    ['start' => '2018-10-24 18:30', 'end' => '2018-10-24 22:00'],
                ],
                'place' => 'Laboratório 2',
            ],
            [
                'name' => 'Word',
                'speaker' => 'Eng. Flavio Jorge Miranda Pimentel',
                'description' => '',
                'type' => 'Minicurso',
                'vacancies' => '30',
                'date' => [
                    ['start' => '2018-10-23 18:30', 'end' => '2018-10-23 22:00'],
                    ['start' => '2018-10-24 18:30', 'end' => '2018-10-24 22:00'],
                ],
                'place' => 'Laboratório 3',
            ],
            [
                'name' => 'MS Project',
                'speaker' => 'A DEFINIR',
                'description' => '',
                'type' => 'Minicurso',
                'vacancies' => '30',
                'date' => [
                    ['start' => '2018-10-23 18:30', 'end' => '2018-10-23 22:00'],
                    ['start' => '2018-10-24 18:30', 'end' => '2018-10-24 22:00'],
                ],
                'place' => 'Laboratório 4',
            ],
            [
                'name' => 'Routeroard',
                'speaker' => 'Kleverton Moises Silva',
                'description' => '',
                'type' => 'Minicurso',
                'vacancies' => '30',
                'date' => [
                    ['start' => '2018-10-23 18:30', 'end' => '2018-10-23 22:00'],
                    ['start' => '2018-10-24 18:30', 'end' => '2018-10-24 22:00'],
                ],
                'place' => 'Laboratório 5',
            ],

            /*
             * Minicursos
             * de salas
             */
            [
                'name' => 'Libras',
                'speaker' => 'Andreia Ferreira Alves Carneiro',
                'description' => '',
                'type' => 'Minicurso',
                'vacancies' => '30',
                'date' => [
                    ['start' => '2018-10-23 18:30', 'end' => '2018-10-23 22:00'],
                    ['start' => '2018-10-24 18:30', 'end' => '2018-10-24 22:00'],
                ],
                'place' => 'Sala 1',
            ],
            [
                'name' => 'Canvas',
                'speaker' => 'Jamylle Santana da Fonseca / Renata Milena dos Anjos',
                'description' => '',
                'type' => 'Minicurso',
                'vacancies' => '30',
                'date' => [
                    ['start' => '2018-10-23 18:30', 'end' => '2018-10-23 22:00'],
                    ['start' => '2018-10-24 18:30', 'end' => '2018-10-24 22:00'],
                ],
                'place' => 'Sala 2',
            ],
            [
                'name' => 'Automação Residencial',
                'speaker' => 'Weber Costa Pinto dos Anjos',
                'description' => '',
                'type' => 'Minicurso',
                'vacancies' => '30',
                'date' => [
                    ['start' => '2018-10-23 18:30', 'end' => '2018-10-23 22:00'],
                    ['start' => '2018-10-24 18:30', 'end' => '2018-10-24 22:00'],
                ],
                'place' => 'Sala 3',
            ],
            [
                'name' => 'Projeto',
                'speaker' => 'Fabio Martins da Silva',
                'description' => '',
                'type' => 'Minicurso',
                'vacancies' => '30',
                'date' => [
                    ['start' => '2018-10-23 18:30', 'end' => '2018-10-23 22:00'],
                    ['start' => '2018-10-24 18:30', 'end' => '2018-10-24 22:00'],
                ],
                'place' => 'Sala 4',
            ],
            [
                'name' => 'Economia e Meio Ambiente',
                'speaker' => 'Érico Rodrigo Mineiro Pereira',
                'description' => '',
                'type' => 'Minicurso',
                'vacancies' => '30',
                'date' => [
                    ['start' => '2018-10-23 18:30', 'end' => '2018-10-23 22:00'],
                    ['start' => '2018-10-24 18:30', 'end' => '2018-10-24 22:00'],
                ],
                'place' => 'Sala 5',
            ],
            [
                'name' => 'Economia e Meio Ambiente',
                'speaker' => 'Érico Rodrigo Mineiro Pereira',
                'description' => '',
                'type' => 'Minicurso',
                'vacancies' => '30',
                'date' => [
                    ['start' => '2018-10-23 18:30', 'end' => '2018-10-23 22:00'],
                    ['start' => '2018-10-24 18:30', 'end' => '2018-10-24 22:00'],
                ],
                'place' => 'Sala 6',
            ],
            [
                'name' => 'Apontamentos para trabalhos conclusão de cursos',
                'speaker' => 'Rejanne Ramos e Silvia Gusmão',
                'description' => '',
                'type' => 'Minicurso',
                'vacancies' => '30',
                'date' => [
                    ['start' => '2018-10-23 18:30', 'end' => '2018-10-23 22:00'],
                    ['start' => '2018-10-24 18:30', 'end' => '2018-10-24 22:00'],
                ],
                'place' => 'Sala 7',
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

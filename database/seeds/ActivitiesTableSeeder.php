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
				'workload'=> 0,
				'has_certificate'=> false,
				'auto_enrol'=> true,
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
				'workload'=> 0,
				'has_certificate'=> false,
				'auto_enrol'=> true,
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
				'workload'=> 10,
				'has_certificate'=> true,
				'auto_enrol'=> false,
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
				'workload'=> 10,
				'has_certificate'=> true,
				'auto_enrol'=> false,
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
				'workload'=> 10,
				'has_certificate'=> true,
				'auto_enrol'=> false,
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
				'workload'=> 10,
				'has_certificate'=> true,
				'auto_enrol'=> false,
            ],
            [
                'name' => 'Routerboard',
                'speaker' => 'Kleverton Moises Silva',
                'description' => '',
                'type' => 'Minicurso',
                'vacancies' => '30',
                'date' => [
                    ['start' => '2018-10-23 18:30', 'end' => '2018-10-23 22:00'],
                    ['start' => '2018-10-24 18:30', 'end' => '2018-10-24 22:00'],
                ],
                'place' => 'Laboratório 5',
				'workload'=> 10,
				'has_certificate'=> true,
				'auto_enrol'=> false,
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
				'workload'=> 10,
				'has_certificate'=> true,
				'auto_enrol'=> false,
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
				'workload'=> 10,
				'has_certificate'=> true,
				'auto_enrol'=> false,
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
				'workload'=> 10,
				'has_certificate'=> true,
				'auto_enrol'=> false,
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
				'workload'=> 10,
				'has_certificate'=> true,
				'auto_enrol'=> false,
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
				'workload'=> 10,
				'has_certificate'=> true,
				'auto_enrol'=> false,
            ],
            [
                'name' => 'Trabalhando sua ideia de forma criativa – Marketing Digital',
                'speaker' => 'André Francisco Peruna de Azevedo',
                'description' => '',
                'type' => 'Minicurso',
                'vacancies' => '30',
                'date' => [
                    ['start' => '2018-10-23 18:30', 'end' => '2018-10-23 22:00'],
                    ['start' => '2018-10-24 18:30', 'end' => '2018-10-24 22:00'],
                ],
                'place' => 'Sala 6',
				'workload'=> 10,
				'has_certificate'=> true,
				'auto_enrol'=> false,
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
				'workload'=> 10,
				'has_certificate'=> true,
				'auto_enrol'=> false,
            ],
            /*
             * MESA REDONDA
             */
            [
                'name' => 'Mesa Redonda',
                'speaker' => 'João Ronaldo Tavares de Vasconcellos Júnior',
                'description' => '',
                'type' => 'Mesa redonda',
                'vacancies' => '200',
                'date' => [
                    ['start' => '2018-10-25 18:30', 'end' => '2018-10-25 22:00'],
                ],
                'place' => 'Auditório',
				'workload'=> 0,
				'has_certificate'=> false,
				'auto_enrol'=> true,
            ],
            /*
             * APRESENTAÇÔES
             */
            [
                'name' => 'Apresentações',
                'speaker' => '',
                'description' => '<ul><li>Trabalhos</li><li>Empresas</li></ul>',
                'type' => 'Apresentação',
                'vacancies' => '200',
                'date' => [
                    ['start' => '2018-10-26 18:30', 'end' => '2018-10-26 22:00'],
                ],
                'place' => 'Auditório',
				'workload'=> 0,
				'has_certificate'=> false,
				'auto_enrol'=> true,
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

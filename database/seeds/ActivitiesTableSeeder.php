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
            [
                'name'=> 'A influência da tecnologia no comportamento do homem',
                'description'=> 'Uma retrospectiva comparativa dos últimos 20 anos e a nova geração Z',
                'type'=> 'Palestra',
                'vacancies'=> '200',
                'date'=> \Carbon\Carbon::parse('25-11-2017 19:00'),
            ],
            [
                'name'=> 'Laravel para iniciantes',
                'description'=> 'Laravel é um dos mais usados Frameworks de PHP, com ele é possível criar aplicações complexas de qualdiade com pouco esforço.',
                'type'=> 'Oficina',
                'vacancies'=> '40',
                'date'=> \Carbon\Carbon::parse('26-11-2017 18:30'),
            ],
        ];
        
        foreach($atividades as $atividade){
            \App\Activity::create($atividade);
        }
    }

}

<?php

use Illuminate\Database\Seeder;

class QuestionsAndAnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            ['type'=> 'skip'    , 'question'=> 'Não quero responder, quero apenas baixar meu certificado'],
            ['type'=> 'question', 'question'=> 'Como qualificaria a comunicação e a informação no website antes do evento?'],
            ['type'=> 'question', 'question'=> 'Como qualificaria o minicurso que você fez?'],
            ['type'=> 'question', 'question'=> 'Como qualificaria a(s) palestra(s) que você assistiu?'],
            ['type'=> 'question', 'question'=> 'Como qualificaria a feira de tecnologia?'],
            ['type'=> 'question', 'question'=> 'Como qualificaria o evento em geral?'],
        ];
        foreach($questions as $question){
            \App\Question::firstOrCreate($question);
        }
        
        $answers = [
            ['answer'=> 'Excelente'],
            ['answer'=> 'Muito bom'],
            ['answer'=> 'Bom'],
            ['answer'=> 'Regular'],
            ['answer'=> 'Ruim'],
        ];
        foreach($answers as $answer){
            \App\Answer::firstOrCreate($answer);
        }
    }
}

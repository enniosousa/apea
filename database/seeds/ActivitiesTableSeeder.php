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
                'speaker' => 'Grupo ProgramAda, professores do curso de TI da FAT, e profissionais de TI de Feira de Santana',
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
                'description' => '
                    <p>Explorar as vantagens que as redes SDN tem a oferecer. Desejável que os participantes possuam um conhecimento 
                    prévio em linux e redes de computadores e habilidades em virtualização.</p>
                    <b class="h5 mbr-section-text-gray">Conteúdo programático</b>
                    <ul class="activity-desc">
                        <li>Instalação</li>
                        <li>Configuração</li>
                        <li>Conexão remota entre a mininet e a máquina de execução</li>
                        <li>Exemplo de uso (hub/switch)</li>
                    </ul>
                    ',
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
                'description' => '
                    <b class="h5 mbr-section-text-gray">Conteúdo programático</b>
                    <ul class="activity-desc">
                        <li>
                            Definições:
                            <ul>
                                <li>Virtualização;</li>
                                <li>Data Center;</li>
                                <li>Computação em Nuvem;</li>
                            </ul>
                        </li>
                        <li>
                            Principais Classificações:
                            <ul>
                                <li>Modelos de Serviços;</li>
                                <li>Modelos de implantação;</li>
                                <li>Arquitetura de referência;</li>
                            </ul>
                        </li>
                        <li>
                            Soluções de nuvem gratuitas (até certo uso):
                            <ul>
                                <li>Amazon Web Services;</li>
                            </ul>
                        </li>
                        <li>
                            Soluções de nuvem de código aberto:
                            <ul>
                                <li> OpenStack;</li>
                            </ul>
                        </li>
                    </ul>
                ',
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
                'description' => '
                    <p>Apresentar fundamentos e conceitos de Big Data</p>
                    <b class="h5 mbr-section-text-gray">Conteúdo programático</b>
                    <ul class="activity-desc">
                        <li>O mundo dos dados</li>
                        <li>Onde está sendo usado?</li>
                        <li>Qual o motivo do sucesso?</li>
                        <li>O que é o Big Data?</li>
                        <li>Onde encontramos hoje o Big Data?</li>
                        <li>Matéria Prima do Big Data</li>
                        <li>Estrutura do Big Data</li>
                        <li>Persistência Poliglota</li>
                        <li>Falando de Map Reduce</li>
                        <li>Conhecendo Algumas Ferramentas</li>
                        <li>Gráficos e BigData</li>
                    </ul>
                ',
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
                'description' => '
                    <p>Ser capaz de resolver problemas através da interpretação de cenários do mundo real, modelando soluções através de modelos e programas e implementando as soluções através de 
                    programas de computador escritos na linguagem Python.</p>
                    <b class="h5 mbr-section-text-gray">Conteúdo programático</b>
                    <ul class="activity-desc">
                        <li>O primeiro do programa</li>
                        <li>Variáveis, expressões e comandos</li>
                        <li>Funções</li>
                        <li>Condicionais</li>
                        <li>Funções</li>
                        <li>Loops </li>
                        <li>Strings</li>
                        <li>Listas, Tuplas, Dicionários</li>
                        <li>Arquivos e exceções</li>
                        <li>Classes e Objetos</li>
                        <li>Classes e funções</li>
                        <li>Classes e métodos</li>
                        <li>Conjuntos de objetos</li>
                        <li>Herança</li>
                    </ul>
                ',
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
                'description' => '
                    <p>Desenvolver uma pequena aplicação com o Laravel, um framework poderoso da linguagem PHP.</p>
                    <b class="h5 mbr-section-text-gray">Conteúdo programático</b>
                    <ul class="activity-desc">
                        <li>Apresentar o Laravel</li>
                        <li>Requisitos mínimos</li>
                        <li>Instalar o Laravel</li>
                        <li>Iniciar o desenvolvimento da aplicação</li>
                    </ul>
                    ',
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
                'description' => '
                    <p>Compreender o funcionamento e configuração do serviço DHCP em servidores Linux.</p>
                    <b class="h5 mbr-section-text-gray">Conteúdo programático</b>
                    <ul class="activity-desc">
                        <li>Instalando o Linux Ubuntu</li>
                        <li>Efetuando a instalação de pacote do serviço DHCP</li>
                        <li>Configurando um escopo de endereçamento.</li>
                    </ul>
                ',
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

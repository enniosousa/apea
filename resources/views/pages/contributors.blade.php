@extends('template.public.index')
@section('metaTitle', 'Colaboradores da Semana Tech 2017')
@section('metaDescription', 'A Semana Tech de 2017 contou com a ajuda de muita gente de forma voluntária, portanto merce reconhecimento')
@section('page')
<section class="mbr-cards mbr-section extFeatures mbr-after-navbar" id="extFeatures9-a" data-rv-view="65" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 80px;">
    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center title-wrap">
                    <h3 class="mbr-section-title display-2">COLABORADORES</h3>
                    <small class="mbr-section-subtitle">A Semana Tech de 2017 contou com a ajuda de muita gente de forma voluntária, portanto merce reconhecimento.</small>
                </div>
            </div>
        </div>
    </div>
    <?php
        $colaboradores = [
            (object)[
                'name'=> 'Andreia Ferreira Alves Carneiro',
                'role'=> 'Coordenação Geral do Evento',
                'photo'=> 'images/colaboradores/Andrea.jpg',
                'about'=> '',
                'link'=> 'http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4201062D6',
            ],
            (object)[
                'name'=> 'Jamylle Santana da Fonseca',
                'role'=> 'Coordenação Geral do Evento',
                'photo'=> 'images/colaboradores/Jamylle.jpg',
                'about'=> '',
                'link'=> 'http://lattes.cnpq.br/5963507378750193',
            ],
            (object)[
                'name'=> 'Weber Costa Pinto dos Anjos',
                'role'=> 'Coordenação Geral do Evento',
                'photo'=> 'images/colaboradores/Weber.jpg',
                'about'=> '',
                'link'=> 'http://lattes.cnpq.br/6457469584164618',
            ],
            (object)[
                'name'=> 'Ed Weine Fernandes de Santana',
                'role'=> 'Coordenação geral do Evento',
                'photo'=> 'images/colaboradores/Ed Weine.jpg',
                'about'=> '',
                'link'=> 'http://lattes.cnpq.br/6740365910166592',
            ],
            (object)[
                'name'=> 'João Ronaldo Tavares de Vasconcellos Junior',
                'role'=> 'Coordenação Geral do Evento',
                'photo'=> 'images/colaboradores/Vasconcellos.jpg',
                'about'=> '',
                'link'=> 'http://lattes.cnpq.br/0473368767041752',
            ],
            (object)[
                'name'=> 'Arivaldo Ferreira Brito',
                'role'=> 'Coordenação Geral do Evento',
                'photo'=> 'images/colaboradores/Arivaldo.jpg',
                'about'=> '',
                'link'=> 'http://lattes.cnpq.br/8288573617244201',
            ],
            (object)[
                'name'=> 'Renata Milena dos Anjos Silva',
                'role'=> 'Coordenação Geral do Evento',
                'photo'=> 'images/colaboradores/Renata.jpg',
                'about'=> '',
                'link'=> 'http://lattes.cnpq.br/6602411609589751',
            ],
        ];
        $colaboradores = array_chunk($colaboradores, 4);
        ?>
        @foreach($colaboradores as $row)
        <div class="mbr-cards-row row" style="@if($loop->index !== 0)margin-top: 30px;@endif">
            @foreach($row as $c)
            <div class="mbr-cards-col col-xs-12 col-lg-2">
                <div class="container">
                    <div class="card cart-block">
                        <div class="feature-img"><img src="{{empty($c->photo) ? 'assets/images/face5.png' : $c->photo}}" class="card-img-top"></div>
                        <div class="card-block">
                            <h4 class="feature-title">{{$c->name}}</h4>
                            <h5 class="feature-subtitle">{{$c->role}}</h5>
                            <div class="delimiter"></div>
                            @isset($c->about)
                            <p class="feature-text">{{$c->about}}</p> @endisset
                            <div class="icons">
                                <span><a href="{{$c->link}}" target="_blank" class="etl-icon icon-attachment mbr-iconfont mbr-iconfont-extFeatures7" style="color: rgb(0, 0, 0);"></a></span>

                                {{--
                                <span><a href="javascript://" class="socicon socicon-dribbble mbr-iconfont mbr-iconfont-extFeatures7" style="color: rgb(0, 0, 0);"></a></span>
                                <span><a href="javascript://" class="socicon socicon-lastfm mbr-iconfont mbr-iconfont-extFeatures7" style="color: rgb(0, 0, 0);"></a></span>
                                <span><a href="javascript://" class="socicon socicon-skype mbr-iconfont mbr-iconfont-extFeatures7" style="color: rgb(0, 0, 0);"></a></span>
                                <span><a href="javascript://" class="socicon socicon-linkedin mbr-iconfont mbr-iconfont-extFeatures7" style="color: rgb(0, 0, 0);"></a></span>
                                --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endforeach
</section>
@endsection
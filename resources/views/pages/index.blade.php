@extends('template.public.index')
@section('metaTitle', 'Semana SER 2018 - Semana de Sistemas, Engenharia e Redes da FAT')
@section('metaDescription', 'A Semana SER é o evento de tenologia da Faculdade Anísio Teixeira pela coordenação, professores e alunos dos cursos de Sistemas para Internet, Engenharia de Produção e Redes de Computadores')
@section('page')
<style>
.btn-black-outline {
    background: rgba(27, 27, 27, 0.35);
    border-color: white;
    color: white;
}
</style>

<?php
    function apresentador(string $tipo = null){
        switch (str_slug($tipo)) {
            case 'minicurso': return 'ministrado'; break;
            case 'mesa-redonda': return 'mediada'; break;
            case 'palestra': return 'ministrada'; break;
            case 'apresentacoes': return 'ministradas'; break;
            default: return 'ministrado'; break;
        }
    }
?>
<!--
<section class="mbr-section mbr-section-hero mbr-section-full mbr-section-with-arrow mbr-parallax-background mbr-after-navbar" 
         id="header1-15" 
         data-rv-view="294" 
         style="background-image: url(assets/images/moscow-city-2210335-1920x1271.jpg);">
    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);"></div>
	<div class="mbr-table-cell">
		<div class="container">
			<div class="row">
				<div class="mbr-section col-md-10 col-md-offset-1 text-xs-center">
					<h1 class="mbr-section-title display-1">IV SEMANA TECH REALIZADA COM SUCESSO!</h1>
					<p class="mbr-section-lead lead">Um enorme obrigado a todos que fizeram parte desta edição!</p>
					<div class="mbr-section-btn">
                        <a class="btn btn-lg btn-success" href="{{action('Certificate\CertificateController@index')}}">
                            <span class="mbri-bookmark mbr-iconfont mbr-iconfont-btn"></span>
                            MEUS CERTIFICADOS
                        </a>
                        <a class="btn btn-lg btn-black-outline btn-black" href="{{action('PublicPagesController@editions')}}">
                            <span class="mbri-image-gallery mbr-iconfont mbr-iconfont-btn"></span>
                            FOTOS DESTA EDIÇÃO
                        </a>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<div class="mbr-arrow mbr-arrow-floating" aria-hidden="true"><a href="#extHeader15-1"><i class="mbr-arrow-icon"></i></a></div>
</section>
-->
<section class="mbr-section mbr-section-hero mbr-section-full extHeader15 mbr-after-navbar" 
         id="extHeader15-1" 
         data-rv-view="4" 
         style="background-image: url(assets/images/moscow-city-2210335-1920x1271.jpg);">
    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(0, 0, 0);"></div>
    <div class="mbr-table-cell">
        <div class="container">
            <div id="title">
                <div class="span-title">
                    <div class="span-title">
                        <span class="mbr-section-title display-2 text-center pad-r">NOSSAS</span>
                        <span class="mbr-section-title display-2 element typedextHeader15-1" adress="typedextHeader15-1" firstel="PALESTRAS" secondel="OFICINAS" thirdel="PREMIAÇÕES" typespeed="60"></span><br>
                        <span class="mbr-section-title display-2 text-center pad-r">ESTÃO CHEGANDO!</span>
                    </div>
                </div>
                <div class="mbr-section-text lead text-center">
                    <p>A Semana SER é um evento realizado pelos cursos de Sistemas para Internet, Rede de Computadores e Engenharia de Produção da Faculdade Anísio Teixeira de Feira de Santana</p>
                </div>
                <div class="countdown" data-end="2018/10/22"></div>
            </div>
        </div>
    </div>
    <div class="mbr-arrow mbr-arrow-floating hidden-sm-down" aria-hidden="true"><a href="#msg-box3-g"><i class="mbr-arrow-icon"></i></a></div>
</section>

<section class="mbr-slider mbr-section mbr-section-nopadding carousel slide extTestimonials1 extTestimonials3 extTestimonials5" data-ride="carousel" data-keyboard="false" data-wrap="true" data-interval="5000" data-pause="false" id="extTestimonials5-3"
    data-rv-view="17" style="background-image: url(assets/images/flight-mountains-sky-flying.jpg); padding-top: 80px; padding-bottom: 40px;">
    <div class="mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-2">PATROCINADORES & PARCEIROS</h3>
                    <small class="mbr-section-subtitle">Todos aqueles que nos apoiam e fazem o evento acontecer</small>
                </div>
            </div>
        </div>
    </div>
    <div class="container boxed-slider">
        <div>
            <?php
            $patrocinadores = [
                (object) [
                    'logo'=> 'assets/images/logos/ennio-sousa_500x500.png',
                    'link'=> 'https://enniosousa.com.br'
                ],
                (object) [
                    'logo'=> 'assets/images/logos/tabajara_500x500.png',
                    'link'=> 'https://moinhotabajara.com.br/'
                ],
                (object) [
                    'logo'=> 'assets/images/logos/fat_500x500.png',
                    'link'=> 'http://fat.edu.br/'
                ],
                /*(object) [
                    'logo'=> 'assets/images/2.png',
                    'link'=> 'javascript://'
                ],
                (object) [
                    'logo'=> 'assets/images/3.png',
                    'link'=> 'javascript://'
                ],*/
            ];
            
            ?>
            <ol class="carousel-indicators">
                @forelse($patrocinadores as $p)
                    <li data-app-prevent-settings="" 
                        data-target="#extTestimonials5-3" 
                        class="{{$loop->index === 0 ? 'active' : ''}}" 
                        data-slide-to="{{$loop->index}}"></li>
                @endforeach
            </ol>
            <div class="carousel-inner" role="listbox" data-visible="5">
                @forelse($patrocinadores as $p)
                <div class="carousel-item {{$loop->index === 0 ? 'active' : ''}}">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wrap-img"><a href="{{$p->link}}" target="_blank"><img src="{{$p->logo}}"></a></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <a data-app-prevent-settings="" class="left carousel-control" role="button" data-slide="prev" href="#extTestimonials5-3">
                <span class="icon-prev" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a data-app-prevent-settings="" class="right carousel-control" role="button" data-slide="next" href="#extTestimonials5-3">
                <span class="icon-next" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
    </div>
</section>

<!-- times do concurso de ideias inovadoras [inicio]
<section class="mbr-section mbr-section__container article" id="header3-v" data-rv-view="62" style="background-color: rgb(255, 255, 255); padding-top: 80px; padding-bottom: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="mbr-section-title display-2 text-sm-center">Prêmios do Concurso de Ideias Inovadoras</h3>
                <small class="mbr-section-subtitle text-sm-center">O concurso de Ideias Inovadoras será realizado durante a feira de tecnologia da Semana Tech, no dia 25/10/2017, quarta-feira e a <strong>ENTRADA É FRANCA</strong>.</small>
            </div>
        </div>
    </div>
</section>
<section class="mbr-cards mbr-section mbr-section-nopadding" id="features4-u" data-rv-view="59" style="background-color: rgb(255, 255, 255);">
    <div class="mbr-cards-row row">
        <div class="mbr-cards-col col-xs-12 col-lg-2" style="padding-top: 0px; padding-bottom: 40px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox"><a href="javascript://" class="mbri-sale mbr-iconfont mbr-iconfont-features4" style="color: black;"></a></div>
                    <div class="card-block">
                        <h4 class="card-title">Bolsa de 50% no curso de Desenvolvimento Web</h4>
                        <p class="card-text">Oferecido por: Weber School</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-2" style="padding-top: 0px; padding-bottom: 40px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox"><a href="javascript://" class="mbri-growing-chart mbr-iconfont mbr-iconfont-features4" style="color: black;"></a></div>
                    <div class="card-block">
                        <h4 class="card-title">Mentoria técnica para o projeto 1º colocado</h4>
                        <p class="card-text">Oferecido por: Weber School</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-2" style="padding-top: 0px; padding-bottom: 40px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox"><a href="javascript://" class="mbri-gift mbr-iconfont mbr-iconfont-features4" style="color: black;"></a></div>
                    <div class="card-block">
                        <h4 class="card-title">5 (cinco) aparelhos “retrô” modelo TC 8312 da Intelbras</h4>
                        <p class="card-text">Oferecido por: Torre Telecom</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-2" style="padding-top: 0px; padding-bottom: 40px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox"><a href="javascript://" class="mbri-sale mbr-iconfont mbr-iconfont-features4" style="color: black;"></a></div>
                    <div class="card-block">
                        <h4 class="card-title">Bolsa integral para o curso de Excel avançado</h4>
                        <p class="card-text">Oferecido por: Speed Informática</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-2" style="padding-top: 0px; padding-bottom: 40px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox"><a href="javascript://" class="mbri-laptop mbr-iconfont mbr-iconfont-features4" style="color: black;"></a></div>
                    <div class="card-block">
                        <h4 class="card-title">1 (um) notebook</h4>
                        <p class="card-text">Oferecido por: SOSNotebook</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mbr-section mbr-section__container" id="buttons1-x" data-rv-view="67" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 60px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-xs-center"><a class="btn btn-info" href="{{url('times-do-concurso-de-ideias-inovadoras')}}">CONHEÇA OS TIMES INSCRITOS NO CONCURSO</a> </div>
            </div>
        </div>
    </div>
</section>
times do concursod de ideias inovadoras [fim] -->

<!--
<section class="mbr-section article" id="msg-box3-g" data-rv-view="11" style="background-color: rgb(242, 242, 242); padding-top: 120px; padding-bottom: 120px;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2">INGRESSO ANTECIPADO POR R$25</h3>
                <div class="lead">Válido até dia 30/09/2017. Após esta data o valor do ingresso será de R$30.</div>
                <div><a class="btn btn-danger" href="{{route('public.ticket')}}"><span class="mbri-shopping-cart mbr-iconfont mbr-iconfont-btn"></span>COMPRAR O INGRESSO</a></div>
            </div>
        </div>
    </div>
</section>
-->

<style>
    ul.activity-desc li {
        clear: both;
        color: #cccccc;
    }
    .extFeatures11 ul .timeline-inverted {
        text-align: left;
    }
    .timeline-inverted ul.activity-desc,
    .timeline-inverted ul.activity-desc li,
    .timeline-inverted ul.activity-desc ul {
        float:none;
    }
    .timeline-inverted ul.activity-desc{
        padding-left: 0px;
    }
</style>
<section class="mbr-section extFeatures11" id="extFeatures11-n" data-rv-view="49" style="background-color: rgb(46, 46, 46); padding-top: 100px; padding-bottom: 100px;">
    <div class="elements-content">

        <div class="container titleBlock">
            <div class="col-xs-12 text-xs-center">
                <h3 class="mbr-section-title display-2">PROGRAMAÇÃO</h3>
                <small class="mbr-section-subtitle">O que está programado para o nosso evento</small>
            </div>
        </div>
        <div class="container timelineHeight">
            <ul class="timeline">
                @foreach(\App\Activity::all() as $activity) 
                    @if($loop->index % 2 ===0)
                        <li class="timeline-normal separline" style="display: block;">
                            <div class="date date-normal">
                                <p class="mbr-section-text-gray lead h-black">
                                    @forelse($activity->dates as $date)
                                        {{$date->start->format('d/m/Y')}} das {{$date->start->format('H:i')}} às {{$date->end->format('H:i')}}
                                        @if($loop->count > 1)
                                            <br>
                                        @endif
                                    @empty
                                        Sem data definida
                                    @endforelse
                                </p>
                            </div>
                            <span class="iconBackground"><span class="icon"></span></span>
                            <div class="timeline-panel">
                                <h4 class="h-black text-right">{{$activity->name}}</h4>
                                <p class="mbr-section-text-gray lead h-black activity-description">
                                    <?php $activity_gender = apresentador($activity->type); ?>
                                    <b><?= "$activity->type $activity_gender por $activity->speaker" ?></b><br>
                                    {!!$activity->description!!}
                                </p>
                            </div>
                        </li>
                    @else
                        <li class="timeline-inverted separline" style="display: block;">
                            <div class="date date-inverted">
                                <p class="mbr-section-text-gray lead h-black">
                                    @forelse($activity->dates as $date)
                                        {{$date->start->format('d/m/Y')}} das {{$date->start->format('H:i')}} às {{$date->end->format('H:i')}}
                                        @if($loop->count > 1)
                                            <br>
                                        @endif
                                    @empty
                                        Sem data definida
                                    @endforelse
                                </p>
                            </div>
                            <div class="timeline-panel">
                                <h4 class="h-black">{{$activity->name}}</h4>
                                <p class="mbr-section-text-gray lead h-black">
                                    <?php $activity_gender = apresentador($activity->type); ?>
                                    <b><?= "$activity->type $activity_gender por $activity->speaker" ?></b><br>
                                    {!!$activity->description!!}
                                </p>
                            </div>
                            <span class="iconBackgroundInverse"><span class="icon"></span></span>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</section>

<!--
<section class="mbr-section mbr-section__container" id="buttons1-s" data-rv-view="54" style="background-color: rgb(46, 46, 46); padding-top: 20px; padding-bottom: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-xs-center"><a class="btn btn-danger" download href="{{asset('download/Programacao_IV_SEMANA_TECH.pdf')}}">
                    <span class="etl-icon icon-download mbr-iconfont mbr-iconfont-btn"></span>BAIXAR A PROGRAMAÇÃO</a>
                </div>
            </div>
        </div>
    </div>
</section>
-->

<section class="mbr-section-no-padding extForm4" id="extForm4-2" data-rv-view="39" style="background-color: rgb(250, 250, 250);">
    <div class="mbr-table mbr-table-full">
        <div class="mbr-table-cell">
            <div class="container-fluid">
                <div class="row">
                    <div class="mbr-table-md-up">
                        <!-- & -->
                        <div class="mbr-table-cell col-md-6 text-xs-center text-md-left inverse">
                            <div class="wrapper">
                                <h2 class="display-2 h-black">DEIXE UMA MENSAGEM</h2>
                                <div class="row text-center">
                                    <div class="col-md-12 parentInverse">
                                        <div class="col-md-12 col-lg-12 inverse-content">
                                            <div class="intro-box right">
                                                <div class="contentInverse">
                                                    <h4 class="h-black">ou escreva-nos</h4>
                                                    <h5 class="subtitle">semanatech@fat.edu.br</h5>
                                                    <h4 class="h-black">ou visite-nos</h4>
                                                    <h5 class="subtitle">Rua Juracy Magalhães, 222, Ponto Central<br>Feira de Santana - Bahia - Brasil</h5>
                                                    <p class="mbr-section-text-gray lead h-black">Coordenação dos cursos de SI e Redes<br></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" style="padding-left: 0px; padding-right: 0px;" data-form-type="formoid">
                                    <div data-form-alert="true">
                                        <div hidden="" data-form-alert-success="true" class="alert alert-form alert-success text-xs-center">Obrigado! Em breve entraremos em contato.</div>
                                    </div>
                                    <form action="https://mobirise.com/" method="post" data-form-title="DEIXE UMA MENSAGEM">
                                        <input type="hidden" value="gBNQKITYiv6QAG3n9N90gWgCyCOMCnR/8CxQTW+odheF5PdshkSIqiP7YgAusTID2DO7eiN/F24a4VF5JF0YKRwJK8oi3m9k54frkm4NPjn/ORjFXGCbBXuC2c1hnGsw" data-form-email="true">
                                        <div class="col-xs-12">
                                            <input type="text" class="form-control" name="name" required="" data-form-field="Name" placeholder="Nome*">
                                        </div>
                                        <div class="col-xs-12" style="padding-left: 15px">
                                            <input type="text" class="form-control" name="email" required="" data-form-field="Email" placeholder="Email*">
                                        </div>
                                        <div class="col-xs-12">
                                            <textarea class="form-control" name="message" rows="7" data-form-field="Message" style="resize:none" placeholder="Mensage"></textarea>
                                        </div>
                                        <div class="col-xs-12 buttons_wrap"><button type="submit" class="btn btn-primary">ENVIAR MENSAGEM</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="mbr-table mbr-valign-top col-md-6">
                            <div class="mbr-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:ChIJ2dbCy5s3FAcRjcRnEUHzmFo" allowfullscreen=""></iframe></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
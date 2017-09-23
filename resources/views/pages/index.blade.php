@extends('template.public.index')

@section('metaTitle', 'Semana Tech 2017 - Semana de Tecnologia da FAT')
@section('metaDescription', 'A Semana Tech é o evento de tenologia da Faculdade Anísio Teixeira pela coordenação, professores e alunos dos cursos de Sistemas para Internet e Redes de Computadores')

@section('page')
<section class="mbr-section mbr-section-hero mbr-section-full extHeader15 mbr-after-navbar" id="extHeader15-1" data-rv-view="4" style="background-image: url(assets/images/img-extheader15-bg.jpg);">
    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(0, 0, 0);"></div>
    <div class="mbr-table-cell">
        <div class="container">
            <div id="title">
                <div class="span-title">
                    <div class="span-title">
                        <span class="mbr-section-title display-2 text-center pad-r">NOSSAS</span>
                        <span class="mbr-section-title display-2 element typedextHeader15-1" 
                              adress="typedextHeader15-1" 
                              firstel="PALESTRAS" 
                              secondel="OFICINAS" 
                              thirdel="PREMIAÇÕES" 
                              typespeed="60"></span><br>
                        <span class="mbr-section-title display-2 text-center pad-r">ESTÃO CHEGANDO!</span>             
                    </div>
                </div>
                <div class="mbr-section-text lead text-center">
                    <p>A Semana Tech é um evento de tecnologia realizado pela coordenação, professores e alunos dos cursos de Sistemas para Internet e Redes de Computadores da Faculdade Anísio Teixeira para a comunidade feirense.</p>
                </div>
                <div class="countdown" data-end="2017/10/16"></div>
            </div>
        </div>
    </div>
    <div class="mbr-arrow mbr-arrow-floating hidden-sm-down" aria-hidden="true"><a href="#msg-box3-g"><i class="mbr-arrow-icon"></i></a></div>
</section>
<section class="mbr-section article" id="msg-box3-g" data-rv-view="11" style="background-color: rgb(242, 242, 242); padding-top: 120px; padding-bottom: 120px;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2">INGRESSO ANTECIPADO POR R$25</h3>
                <div class="lead">Válido até dia 30/09/2017. Após esta data o valor do ingresso será de R$30.</div>
                <div><a class="btn btn-danger" href="{{action('Enrol\EnrolController@create')}}"><span class="mbri-shopping-cart mbr-iconfont mbr-iconfont-btn"></span>COMPRAR O INGRESSO</a></div>
            </div>
        </div>
    </div>
</section>
<section class="mbr-section extFeatures10" id="extFeatures10-4" data-rv-view="14" style="background-color: rgb(233, 233, 233); padding-top: 100px; padding-bottom: 100px;">
    <div class="elements-content">
        <div class="container titleBlock">
            <div class="col-xs-12 text-xs-center">
                <h3 class="mbr-section-title display-2">PROGRAMAÇÃO</h3>
                <small class="mbr-section-subtitle">O que está programado para o nosso evento</small>
            </div>
        </div>
        <div class="container timelineHeight">
            <ul class="timeline">
                <li class="timeline-normal separline" style="display: block;">
                    <span class="iconBackground"><span class="icon"><span class="etl-icon icon-layers mbr-iconfont-extFeatures2" style="color: #333333"></span></span></span>
                    <div class="timeline-panel">
                        <h4 class="h-black text-right">1. O mercado de TI em Feira de Santana</h4>
                        <p class="mbr-section-text-gray lead h-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam erat libero, bibendum in libero tempor, luctus volutpat ligula. Integer fringilla porttitor pretium. Nam erat felis, iaculis id justo ut, ullamcorper feugiat elit. Proin vel lectus auctor, porttitor ligula vitae, convallis leo. In eget massa elit.</p>
                    </div>
                </li>
                <li class="timeline-inverted separline" style="display: block;">
                    <div class="timeline-panel">
                        <h4 class="h-black">2. Laravel: porque usa-lo</h4>
                        <p class="mbr-section-text-gray lead h-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam erat libero, bibendum in libero tempor, luctus volutpat ligula. Integer fringilla porttitor pretium. Nam erat felis, iaculis id justo ut, ullamcorper feugiat elit. Proin vel lectus auctor, porttitor ligula vitae, convallis leo. In eget massa elit.</p>
                    </div>
                    <span class="iconBackgroundInverse"><span class="icon"><span class="etl-icon icon-upload mbr-iconfont-features6" style="color: #333333"></span></span></span>
                </li>
                <li class="timeline-normal" style="display: block;">
                    <span class="iconBackground"><span class="icon"><span class="etl-icon icon-linegraph mbr-iconfont-features6" style="color: #333333"></span></span></span>
                    <div class="timeline-panel">
                        <h4 class="h-black text-right">3. Mini-curso de arduino</h4>
                        <p class="mbr-section-text-gray lead h-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam erat libero, bibendum in libero tempor, luctus volutpat ligula. Integer fringilla porttitor pretium. Nam erat felis, iaculis id justo ut, ullamcorper feugiat elit. Proin vel lectus auctor, porttitor ligula vitae, convallis leo. In eget massa elit.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="mbr-slider mbr-section mbr-section-nopadding carousel slide extTestimonials1 extTestimonials3 extTestimonials5" data-ride="carousel" data-keyboard="false" data-wrap="true" data-interval="5000" data-pause="false" id="extTestimonials5-3" data-rv-view="17" style="background-image: url(assets/images/flight-mountains-sky-flying.jpg); padding-top: 80px; padding-bottom: 40px;">
    <div class="mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-2">PATROCINADORES</h3>
                    <small class="mbr-section-subtitle">Todos aqueles que nos apoiam e fazem o evento acontecer</small>
                </div>
            </div>
        </div>
    </div>
    <div class="container boxed-slider">
        <div>
            <ol class="carousel-indicators">
                <li data-app-prevent-settings="" data-target="#extTestimonials5-3" class="active" data-slide-to="0"></li>
                <li data-app-prevent-settings="" data-target="#extTestimonials5-3" data-slide-to="1"></li>
                <li data-app-prevent-settings="" data-target="#extTestimonials5-3" data-slide-to="2"></li>
                <li data-app-prevent-settings="" data-target="#extTestimonials5-3" data-slide-to="3"></li>
                <li data-app-prevent-settings="" data-target="#extTestimonials5-3" data-slide-to="4"></li>
                <li data-app-prevent-settings="" data-target="#extTestimonials5-3" data-slide-to="5"></li>
            </ol>
            <div class="carousel-inner" role="listbox" data-visible="5">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wrap-img"><a href="javascript://"><img src="assets/images/1.png"></a></div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wrap-img"><a href="javascript://"><img src="assets/images/2.png"></a></div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wrap-img"><a href="javascript://"><img src="assets/images/3.png"></a></div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wrap-img"><a href="javascript://"><img src="assets/images/4.png"></a></div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wrap-img"><a href="javascript://"><img src="assets/images/5.png"></a></div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wrap-img"><a href="javascript://"><img src="assets/images/3.png"></a></div>
                        </div>
                    </div>
                </div>
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
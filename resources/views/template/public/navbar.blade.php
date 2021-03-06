<style>
    html.mobile section#extHeader15-1 {
        padding-top: 100px;
    }
    #ext_menu-0 > nav,
    #ext_menu-0 .nav-dropdown-sm
    {
        background-color: #dcdcdc !important;
    }
    #ext_menu-0 .link{
        color: #282828 !important;
    }
    #ext_menu-0 .nav-dropdown-sm .link:hover{
        color: white !important;
    }
</style>
<?php
    $is_local_app = env('APP_ENV', null) === 'local' ? true : false;
?>
        @if($is_local_app)
            <div class="alert alert-danger" role="alert" style="width: 100%;text-align: center;position: fixed;top: 0;left: 0;z-index: 9;">
                Esta aplicação está em testes. Nenhuma inscrição realizada será mantida após os testes.
            </div>
        @endif
<section id="ext_menu-0" data-rv-view="0">
    <nav class="navbar navbar-dropdown navbar-fixed-top" style="<?= $is_local_app ? 'margin-top: 60px;' : '' ?>">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">
                    <div class="navbar-brand">
                        <a href="<?=url('/')?>" class="navbar-logo"><img src="<?=asset('/images/logo.png')?>" alt="Semana SER" title="Semana SER"></a>
                        <!--<a class="navbar-caption" href="<?=url('/')?>">SEMANA SER</a>-->
                    </div>
                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                        <li class="nav-item"><a class="nav-link link" href="<?=url('/')?>#extFeatures11-n">PROGRAMAÇÃO</a></li>
                        
                        <!--
                        <li class="nav-item dropdown open">
                            <a class="nav-link link dropdown-toggle" href="javascript://" data-toggle="dropdown-submenu" aria-expanded="true">EDITAIS</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?=url('download/EDITAL PARA APRESENTAÇÃO DE BANNER.pdf')?>" target="_blank">EDITAL DE BANNERS</a>
                                <a class="dropdown-item" href="<?=url('download/edital%20ideias%20inovadoras%20-%20Comentarios%20Versao%203.pdf')?>" target="_blank">EDITAL DE IDEIAS INOVADORAS</a>
                            </div>
                        </li>
                        -->

                        <!--<li class="nav-item"><a class="nav-link link" href="<?=action('PublicPagesController@contributors')?>">EQUIPE</a></li>-->
                        <li class="nav-item"><a class="nav-link link" href="<?=action('PublicPagesController@editions')?>">EDIÇÕES ANTERIORES</a></li>
                        <li class="nav-item"><a class="nav-link link" href="<?=url('/')?>#extForm4-2">CONTATO</a></li>

                        @if(\Auth::check())
                        <li class="nav-item nav-btn"><a class="nav-link btn btn-success" href="<?=route('public.ticket')?>">MINHA INSCRIÇÃO</a></li>
                        @else
                        <li class="nav-item nav-btn"><a class="nav-link btn btn-danger" href="<?=route('register')?>"><span class="mbri-shopping-cart mbr-iconfont mbr-iconfont-btn"></span>INSCREVER-SE</a></li>
                        @endif
                        <!--
                        <li class="nav-item nav-btn">
                            <a class="nav-link btn btn-success" href="<?=action('Certificate\CertificateController@index')?>">
                                <span class="mbri-bookmark mbr-iconfont mbr-iconfont-btn"></span>
                                MEUS CERTIFICADOS
                            </a>
                        </li>
                        -->

                        @if(Auth::check())
                        <li class="nav-item nav-btn"><a class="nav-link btn btn-info" href="<?=route('logout')?>"  onclick="event.preventDefault();document.getElementById('logout-form').submit();"><span class="mbri-logout mbr-iconfont mbr-iconfont-btn"></span>SAIR</a></li>
                        <form id="logout-form" action="<?= route('logout') ?>" method="POST" style="display: none;"><?= csrf_field() ?></form>
                        @else
                        <li class="nav-item nav-btn"><a class="nav-link btn btn-info" href="<?=route('public.ticket')?>"><span class="mbri-login mbr-iconfont mbr-iconfont-btn"></span>ENTRAR</a></li>
                        @endif
                    </ul>

                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>
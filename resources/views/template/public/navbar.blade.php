<section id="ext_menu-0" data-rv-view="0">
    <style>
        #ext_menu-0 > nav {
            background-color: #dcdcdc !important;
        }
        #ext_menu-0 .link{
            color: #282828 !important;
        }
    </style>
    <nav class="navbar navbar-dropdown navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="{{url('/')}}" class="navbar-logo">
                            <img src="assets/images/tsemanatech-464x243.png" alt="Semana Tech" title="Semana Tech">
                        </a>
                        {{--
                        <a class="navbar-caption" href="{{url('/')}}">SEMANA TECH</a>
                        --}}
                        
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                        <li class="nav-item"><a class="nav-link link" href="{{url('/')}}#extFeatures11-n">PROGRAMAÇÃO</a></li>
                        <li class="nav-item"><a class="nav-link link" href="{{url('download/EDITAL PARA APRESENTAÇÃO DE BANNER.pdf')}}">EDITAL DE BANNERS</a></li>
                        <!--
                        <li class="nav-item"><a class="nav-link link" href="{{url('/')}}#extTestimonials5-3">PATROCINADORES</a></li>
                        -->
                        <li class="nav-item"><a class="nav-link link" href="{{action('PublicPagesController@contributors')}}">EQUIPE</a></li>
                        <li class="nav-item"><a class="nav-link link" href="{{action('PublicPagesController@editions')}}">EDIÇÕES ANTERIORES</a></li>
                        <li class="nav-item"><a class="nav-link link" href="{{url('/')}}#extForm4-2">CONTATO</a></li>


                        @if(\Auth::check() && \Auth::user()->enrols()->count())
                        <li class="nav-item nav-btn"><a class="nav-link btn btn-success" href="{{route('public.ticket')}}">MINHA INSCRIÇÃO</a></li>
                        @else
                        <li class="nav-item nav-btn"><a class="nav-link btn btn-danger" href="{{route('public.ticket')}}"><span class="mbri-shopping-cart mbr-iconfont mbr-iconfont-btn"></span>COMPRAR O INGRESSO</a></li>
                        @endif







                        @if(Auth::check())
                        <li class="nav-item nav-btn"><a class="nav-link btn btn-info" href="{{route('logout')}}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();"><span class="mbri-logout mbr-iconfont mbr-iconfont-btn"></span>SAIR</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        @else
                        <li class="nav-item nav-btn"><a class="nav-link btn btn-info" href="{{route('login')}}"><span class="mbri-login mbr-iconfont mbr-iconfont-btn"></span>ENTRAR</a></li>
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
<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
    <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="{{action('Dashboard\HomeController@index')}}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">
                Dashboard</span>
        </a>
    </li>
    <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Inscritos">
        <a class="nav-link" href="{{action('Dashboard\EnroledsController@index')}}">
            <i class="fa fa-fw fa-list"></i>
            <span class="nav-link-text">
                Inscritos</span>
        </a>
    </li>
    <!--
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">
                Components</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
                <a href="static-nav.html">Static Navigation</a>
            </li>
            <li>
                <a href="#">Custom Card Examples</a>
            </li>
        </ul>
    </li>
    -->
</ul>

<ul class="navbar-nav sidenav-toggler">
    <li class="nav-item">
        <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
        </a>
    </li>
</ul>
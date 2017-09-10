<!-- Breadcrumbs -->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{action('Dashboard\HomeController@index')}}">Dashboard</a>
    </li>
    @forelse((isset($breadcrumbs)? $breadcrumbs : []) as $text => $link)
        @if($loop->last)
            <li class="breadcrumb-item active">{{$text}}</li>
        @else
            <li class="breadcrumb-item">
                <a href="{{$link}}">{{$text}}</a>
            </li>
        @endif
    @empty
        <li class="breadcrumb-item active">Início</li>
    @endforelse
</ol>
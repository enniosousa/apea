@extends('template.dashboard.index')

@section('content')
@component('template.dashboard.components.breadcrumbs')
@endcomponent
<!-- Icon Cards -->
<div class="row">
    @component('template.dashboard.components.card', [
        'type'=> 'primary', //options: primary, warning, success and danger
        'icon'=> 'fa fa-fw fa-list',
        'text'=> '<div class="h3">Inscritos</div>',
        'link'=> action('Dashboard\EnroledsController@index'),
    ])
    @endcomponent
</div>
@endsection
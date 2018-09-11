@extends('template.public.index')

@section('metaTitle', 'Ingresso da Semana Tech 2017')
@section('metaDescription', '')

@section('page')
    <div class="container" style="margin-top: <?= env('APP_ENV', null) === 'local' ? 120 + 60 : 120 ?>px">
        
        @if(\Auth::user()->enrols()->count())
            @include('pages.ticket.update')
        @else
            @include('pages.ticket.create')
        @endif
    </div>
@endsection
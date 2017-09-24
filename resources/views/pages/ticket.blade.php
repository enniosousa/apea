@extends('template.public.index')

@section('metaTitle', 'Ingresso da Semana Tech 2017')
@section('metaDescription', '')

@section('page')
    <div class="container" style="margin-top: 120px;">
        
        @if(\Auth::user()->enrols()->count())
            @include('pages.ticket.update')
        @else
            @include('pages.ticket.create')
        @endif
    </div>
@endsection
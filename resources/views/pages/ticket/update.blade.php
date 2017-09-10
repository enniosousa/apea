<?php
$userEnrols = [];
foreach (\Auth::user()->enrols as $enrol) {
    $userEnrols[] = $enrol->id;
}
?>

{!! Form::open(['action' => 'Enrol\EnrolController@update', 'method'=>'put']) !!}
<div class="container carrinho">
    @include('flash::message')
    {!! $errors->first('activities', '<div class="alert alert-warning">:message</div>') !!}
    <div class="col-md-8">
        <div class="list-group">
            @foreach(\App\Activity::all() as $activity)

            <div class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <small class="pull-right">
                        @if($activity->enroleds < $activity->vacancies)
                        <input name="activities[]" value="{{$activity->id}}" type="checkbox" class="custom-control-input"
                               @if(in_array($activity->id, $userEnrols))
                               checked
                               @endif
                               >
                               @else
                               <input type="checkbox" class="custom-control-input" disabled>
                        @endif
                    </small>
                    <h5 class="mb-1">{{$activity->name}}</h5>
                </div>
                <p class="mb-1">
                    <span class="badge badge-default"><span class="mbri-calendar"></span> {{$activity->data}}</span>
                    &nbsp;&nbsp;<span class="badge badge-default"><span class="mbri-users"></span> {{$activity->enroleds}}/{{$activity->vacancies}}</span>
                    &nbsp;&nbsp;<span class="badge badge-default"><span class="mbri-idea"></span> {{$activity->type}}</span>
                    <br>
                    {{$activity->description}}
                </p>
            </div>
            @endforeach
        </div>
    </div>
    <div class="col-md-4">
        <div class="list-group">
            <div class="list-group-item list-group-item-action flex-column align-items-start">
                <dl>
                    <dt>Status do pagamento</dt>
                    <dd>Aguardando o pagamento</dd>
                </dl>
            </div>
            <div class="list-group-item list-group-item-action flex-column align-items-start">
                <a href="javascript://" class="btn btn-danger text-uppercase">
                    <span class="mbri-shopping-cart mbr-iconfont mbr-iconfont-btn"></span>
                    Pagar agora
                </a>
            </div>
            <div class="list-group-item list-group-item-action flex-column align-items-start">
                <button type="submit" class="btn btn-primary text-uppercase">
                    Atualizar inscrição
                </button>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
@push('style')
<style>
    .carrinho{
        margin-bottom: 1em;
    }
    .badge-default {
        background-color: #636c72;
    }
    .badge {
        display: inline-block;
        padding: .25em .4em;
        font-size: 75%;
        font-weight: 700;
        line-height: 1;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: .25rem;
    }
</style>
@endpush
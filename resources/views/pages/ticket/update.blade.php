{!! Form::open(['action' => 'Enrol\EnrolController@update', 'method'=>'put']) !!}
<div class="container carrinho">
     @include('flash::message') 
    <div class="col-md-6">
        <div class="list-group">
            <p class="h2">Minicursos</p>
           {!! $errors->first('Minicurso', '<div class="alert alert-warning">:message</div>') !!}
            @each('pages.ticket.item', \App\Activity::where('type', 'Minicurso')->get(), 'activity')
        </div>
    </div>
    <div class="col-md-6">
        <div class="list-group">
            <p class="h2">Palestras</p>
            {!! $errors->first('Palestra', '<div class="alert alert-warning">:message</div>') !!}
            @each('pages.ticket.item', \App\Activity::where('type', 'Palestra')->get(), 'activity')
        </div>
    </div>

    <div class="col-md-6">
        <div class="list-group">
            <br>
            <p class="h2">Checkout</p>
            <div class="list-group-item list-group-item-action flex-column align-items-start">
                <dl>
                    <dt>Status do pagamento</dt>
                    <dd>
                      @if(\Auth::user()->pagseguro_status_name == null)
                      Aguardando o pagamento
                      @else
                      {{\Auth::user()->pagseguro_status_name}}
                      @endif
                  </dd>
                </dl>
            </div>
            @if(\Auth::user()->pagseguro_status_name == null)
            <div class="list-group-item list-group-item-action flex-column align-items-start">
                <a href="{{\Auth::user()->pagseguro_link}}" class="btn btn-danger text-uppercase" target="_blank">
                    <span class="mbri-shopping-cart mbr-iconfont mbr-iconfont-btn"></span>
                    Pagar agora
                </a>
            </div>
            @endif
            <div class="list-group-item list-group-item-action flex-column align-items-start">
                <button type="submit" class="btn btn-primary text-uppercase">
                    Atualizar inscrição
                </button>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!} @push('style')
<style>
    .carrinho {
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
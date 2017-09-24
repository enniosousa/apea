{!! Form::open(['action' => 'Enrol\EnrolController@create']) !!}
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
                    <dt>Subtotal</dt>
                    <dd>R$ {{number_format(\App\Discount::price(), 2, ',', ' ')}}</dd>

                    <dt>Ingresso antecipado</dt>
                    <dd>- R$ {{number_format(\App\Discount::earlyDiscount(), 2, ',', ' ')}}</dd>

                    <dt>Aluno da FAT</dt>
                    <dd>- R$ {{number_format(\App\Discount::fatDiscount(), 2, ',', ' ')}}</dd>

                    <dt>Total a pagar</dt>
                    <dd>R$ {{number_format(\App\Discount::total(), 2, ',', ' ')}}</dd>
                </dl>
                <button type="submit" class="btn btn-danger text-uppercase">
                        <span class="mbri-shopping-cart mbr-iconfont mbr-iconfont-btn"></span>
                        Comprar o ingresso
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
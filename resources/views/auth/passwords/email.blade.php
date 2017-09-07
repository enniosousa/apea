@extends('template.template')

@section('metaTitle', 'Login')

@section('body')
<body class="bg-dark">

    <div class="container">

        <div class="card card-login mx-auto mt-5">
            <div class="card-header">
                Redefinição de senha
            </div>
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{ session('status') }}
                </div>
                @else
                <div class="text-center mt-4 mb-5">
                    <h4>Esqueceu a senha?</h4>
                    <p>Digite seu endereço de e-mail e nós lhe enviaremos instruções sobre como redefinir sua senha.</p>
                </div>
                @endif
                <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input name="email" type="email" value="{{old('email')}}" class="form-control {{$errors->first('email', 'is-invalid')}}" id="email" placeholder="E-mail">
                        {!! $errors->first('email', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Enviar link de redefinição pro e-mail</button>
                </form>
                <div class="text-center">
                    <a class="d-block small mt-3" href="{{ route('register') }}">Cadastrar-se</a>
                    <a class="d-block small" href="{{ route('login') }}">Entrar</a>
                </div>
            </div>
        </div>
    </div>

    <link href="{{asset('assets/app/app.css')}}" rel="stylesheet">
    <script src="{{asset('assets/app/app.js')}}"></script>
</body>
@endsection
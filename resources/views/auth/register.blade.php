@extends('template.template')

@section('metaTitle', 'Login')

@section('body')
<body class="bg-dark">

    <div class="container">

        <div class="card card-register mx-auto mt-5">
            <div class="card-header">
                Cadastrar-se
            </div>
            <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input name="name" type="name" value="{{old('name')}}" class="form-control {{$errors->first('name', 'is-invalid')}}" id="name" placeholder="Nome">
                        {!! $errors->first('name', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input name="email" type="email" value="{{old('email')}}" class="form-control {{$errors->first('email', 'is-invalid')}}" id="email" placeholder="E-mail">
                        {!! $errors->first('email', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="password">Senha</label>
                                <input name="password" type="password" class="form-control {{$errors->first('password', 'is-invalid')}}" id="password" placeholder="Senha">
                                {!! $errors->first('password', '<span class="invalid-feedback">:message</span>') !!}
                            </div>
                            <div class="col-md-6">
                                <label for="password_confirmation">Confirmação de senha</label>
                                <input name="password_confirmation" type="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirmação de senha">
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Cadastrar-se</button>
                </form>
                <div class="text-center">
                    <a class="d-block small mt-3" href="{{ route('login') }}">Entrar</a>
                    <a class="d-block small" href="{{ route('password.request') }}">Esqueceu a senha?</a>
                </div>
            </div>
        </div>
    </div>

    <link href="{{asset('assets/app/app.css')}}" rel="stylesheet">
    <script src="{{asset('assets/app/app.js')}}"></script>
</body>
@endsection
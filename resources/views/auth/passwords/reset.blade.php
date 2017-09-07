@extends('template.template')

@section('metaTitle', 'Login')

@section('body')
<body class="bg-dark">

    <div class="container">

        <div class="card card-login mx-auto mt-5">
            <div class="card-header">
                Redefinir a senha
            </div>
            <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input name="email" type="email" value="{{ $email or old('email') }}" class="form-control {{$errors->first('email', 'is-invalid')}}" id="email" placeholder="E-mail">
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
                                {!! $errors->first('password_confirmation', '<span class="invalid-feedback">:message</span>') !!}
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Redefinir a senha</button>
                </form>
            </div>
        </div>
    </div>

    <link href="{{asset('assets/app/app.css')}}" rel="stylesheet">
    <script src="{{asset('assets/app/app.js')}}"></script>
</body>
@endsection
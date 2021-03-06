<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
    <head        >
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="description" content="">
        <meta name="author" content="">
        <title>Login - {{config('app.name')}}</title>

        <!-- Bootstrap core CSS -->
        <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template -->
        <link href="{{asset('css/sb-admin.css')}}" rel="stylesheet">

    </head>
    <body class="bg-dark">

        <div class="container">

            <div class="card card-login mx-auto mt-5">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input name="email" type="email" value="{{old('email')}}" class="form-control {{$errors->first('email', 'is-invalid')}}" id="email" placeholder="E-mail">
                            {!! $errors->first('email', '<span class="invalid-feedback">:message</span>') !!}
                        </div>
                        <div class="form-group">
                            <label for="password">Senha</label>
                            <input name="password" type="password" value="{{old('password')}}" class="form-control {{$errors->first('password', 'is-invalid')}}" id="password" placeholder="Senha">
                            {!! $errors->first('password', '<span class="invalid-feedback">:message</span>') !!}
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" name="remember" {{old('remember') ? 'checked' : ''}}>
                                    Manter-se conectado
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </form>
                    <div class="text-center">
                        <a class="d-block small mt-3" href="{{ route('register') }}">Cadastrar-se</a>
                        <a class="d-block small" href="{{ route('password.request') }}">Esqueceu a senha?</a>
                    </div>
                </div>
            </div>
        </div>

        <link href="{{asset('assets/app/app.css')}}" rel="stylesheet">
        <script src="{{asset('assets/app/app.js')}}"></script>
    </body>
</html>
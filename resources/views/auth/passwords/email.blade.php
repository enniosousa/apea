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
</html>
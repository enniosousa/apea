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
            <div class="card card-register mx-auto mt-5">
                <div class="card-header">
                    Cadastrar-se
                </div>
                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Nome completo</label>
                            <input name="name" type="text" value="{{old('name')}}" class="form-control {{$errors->first('name', 'is-invalid')}}" id="name" placeholder="Nome completo">
                            <small id="nameHelpBlock" class="form-text text-muted">Informe o nome completo, pois é através dele que o certificado é gerado.</small>
                            {!! $errors->first('name', '<span class="invalid-feedback">:message</span>') !!}
                        </div>
                        <div class="form-group">
                            <label for="fat_student">Aluno da FAT?</label>
                            <div>
                                <label class="custom-control custom-radio" onclick="$('.fat_register').show();">
                                    <input name="fat_student" type="radio" class="custom-control-input" value="true" {{old('fat_student') == 'true' ? 'checked' : ''}}>
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Sim</span>
                                </label>
                                <label class="custom-control custom-radio" onclick="$('.fat_register').hide();">
                                    <input name="fat_student" type="radio" class="custom-control-input" value="false" {{old('fat_student') == 'false' ? 'checked' : ''}}>
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Não</span>
                                </label>
                                {!! $errors->first('fat_student', '<span class="invalid-feedback">:message</span>') !!}
                            </div>
                        </div>
                        <div class="form-group fat_register" style="{{old('fat_student') === null || old('fat_student') == 'false' ? 'display:none;' : ''}}">
                            <label for="fat_register">Matrícula de aluno da FAT</label>
                            <input name="fat_register" type="text" value="{{old('fat_register')}}" class="form-control {{$errors->first('fat_register', 'is-invalid')}}" id="fat_register" placeholder="Matrícula de aluno da FAT">
                            <small id="registerHelpBlock" class="form-text text-muted"></small>
                            {!! $errors->first('fat_register', '<span class="invalid-feedback">:message</span>') !!}
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input name="email" type="text" value="{{old('email')}}" class="form-control {{$errors->first('email', 'is-invalid')}}" id="email" placeholder="E-mail">
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
                                    <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="Confirmação de senha">
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
        <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/app/app.js')}}"></script>
    </body>
</html>
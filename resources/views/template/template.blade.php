<!DOCTYPE html>
<html lang="{{config('app.lang')}}">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('metaTitle')</title>
    
    
    <script src="{{asset('assets/jquery/jquery.min.js')}}"></script>
    
    <link href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    
    <link href="{{asset('assets/twitter-bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{asset('assets/twitter-bootstrap/js/bootstrap.min.js')}}"></script>
    
    <link href="{{asset('assets/startbootstrap-sb-admin-2/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <script src="{{asset('assets/startbootstrap-sb-admin-2/js/sb-admin-2.min.js')}}"></script>
    
    <link href="{{asset('assets/metisMenu/metisMenu.min.css')}}" rel="stylesheet">
    <script src="{{asset('assets/metisMenu/metisMenu.min.js')}}"></script>
    
    @stack('styles')
    @stack('scripts')
  </head>

    @yield('body')

</html>
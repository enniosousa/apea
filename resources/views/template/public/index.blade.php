<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{asset('assets/images/mbr-favicon.png')}}" type="image/x-icon">
        <meta name="description" content="@yield('metaDescription')">
        <title>@yield('metaTitle')</title>
        <link rel="stylesheet" href="{{asset('assets/et-line-font-plugin/style.css')}}">
        <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Montserrat:400,700')}}">
        <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i')}}">
        <link rel="stylesheet" href="{{asset('assets/web/assets/mobirise-icons/mobirise-icons.css')}}">
        <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&subset=latin')}}">
        <link rel="stylesheet" href="{{asset('assets/bootstrap-material-design-font/css/material.css')}}">
        <link rel="stylesheet" href="{{asset('assets/tether/tether.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/animate.css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/dropdown/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/socicon/css/styles.css')}}">
        <link rel="stylesheet" href="{{asset('assets/theme/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/mobirise3-blocks-plugin/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/mobirise-gallery/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/mobirise/css/mbr-additional.css')}}" type="text/css">
        <link href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

        @stack('style')
    </head>
    <body>
        @include('template.public.navbar')

        @yield('page')

        @include('template.public.footer')


        <script src="{{asset('assets/web/assets/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/tether/tether.min.js')}}"></script>
        <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/smooth-scroll/smooth-scroll.js')}}"></script>
        <script src="{{asset('assets/touch-swipe/jquery.touch-swipe.min.js')}}"></script>
        <script src="{{asset('assets/viewport-checker/jquery.viewportchecker.js')}}"></script>
        <script src="{{asset('assets/dropdown/js/script.min.js')}}"></script>
        <script src="{{asset('assets/typed/typed.min.js')}}"></script>
        <script src="{{asset('assets/countdown/jquery.countdown.min.js')}}"></script>
        <script src="{{asset('assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js')}}"></script>
        <script src="{{asset('assets/theme/js/script.js')}}"></script>
        
        <script src="{{asset('assets/mobirise-gallery/player.min.js')}}"></script>
        <script src="{{asset('assets/mobirise-gallery/script.js')}}"></script>
        
        <script src="{{asset('assets/mobirise3-blocks-plugin/js/script.js')}}"></script>
        <script src="{{asset('assets/formoid/formoid.min.js')}}"></script>
        <input name="animation" type="hidden">
        @stack('scripts')
        <script type='application/ld+json'> 
            {
            "@context": "http://www.schema.org",
            "@type": "Event",
            "name": "Semana Tech",
            "url": "{{url('/')}}",
            "description": "A Semana Tech é um evento de tecnologia realizado pela coordenação, professores e alunos dos cursos de Sistemas para Internet e Redes de Computadores da Faculdade Anísio Teixeira para a comunidade feirense.",
            "startDate": "2017-10-16T18:30",
            "endDate": "2017-10-18T22:00",
            "location": {
            "@type": "Place",
            "name": "Auditório Ernestina Carneiro",
            "sameAs": "http://www.fat.edu.br",
            "address": {
            "@type": "PostalAddress",
            "streetAddress": "Rua General João Costa",
            "addressLocality": "Feira de Santana",
            "addressRegion": "Bahia",
            "postalCode": "44075-505",
            "addressCountry": "Brasil"
            }
            },
            "offers": {
            "@type": "Offer",
            "description": "Primeiro lote de ingressos",
            "url": "https://evac.azurewebsites.net/ingresso",
            "availability": "https://evac.azurewebsites.net/ingresso",
            "price": "25",
            "priceCurrency": "BRL",
            "validFrom": "2017-08-25T00:00"
            }
            }
        </script>
    </body>
</html>
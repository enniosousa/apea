@component('mail::message')
# Olá {{$name}}

O status da sua inscrição mudou para **{{$status}}**.

Atenciosamente,<br>
{{ config('app.name') }} {{date('Y')}}
@endcomponent
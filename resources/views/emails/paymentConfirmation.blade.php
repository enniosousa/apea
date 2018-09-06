@component('mail::message')
# Olá {{$name}}

Pagamento da inscrição efetuado com sucesso!

Atenciosamente,<br>
{{ config('app.name') }} {{date('Y')}}
@endcomponent
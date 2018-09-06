@component('mail::message')
# Olá {{$name}}

Inscrição realizada com sucesso! Efetue o pagamento para garatir a sua inscrição.

@component('mail::button', ['url' => $pagseguro_payment_link])
Pagar a inscrição
@endcomponent

Atenciosamente,<br>
{{ config('app.name') }} {{date('Y')}}
@endcomponent
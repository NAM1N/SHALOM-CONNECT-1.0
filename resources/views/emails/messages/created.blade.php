@component('mail::message')
# Salut👋🏾
- {{ $msg->name }}
- {{ $msg->email }} <hr>
{{ $msg->subject }}

@component('mail::panel')
 {{ $msg->message }}
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent

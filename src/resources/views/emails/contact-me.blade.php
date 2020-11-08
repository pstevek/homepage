@component('mail::message')
# Hi Steve
\
You received the following message:

> {{ $message }}

\
From: **{{ $name }}**<br>
Email: **{{ $email }}**

Regards,<br>
{{ config('app.name') }}
@endcomponent

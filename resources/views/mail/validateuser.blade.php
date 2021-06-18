@component('mail::message')

Bienvenue, {{$mail->email}}!

Vous avez été validé sur notre site LABS!
Cliquez sur ce lien pour acceder au dashboard.
@component('mail::button', ['url' => 'http://127.0.0.1:8000/admin'])
Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
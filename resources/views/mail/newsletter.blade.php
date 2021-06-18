@component('mail::message')
# Introduction

Bienvenue, {{$mail->email}}!

Vous êtes désormais inscrit(e) à la newsletter!

A très bientôt,<br>
{{ config('app.name') }}
@endcomponent
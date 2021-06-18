@component('mail::message')
# Introduction

Bienvenue dans l'équipe de Labs !

Votre e-mail : {{$mail->email}}

Vous êtes désormais sur la liste d'attente de validation.

A très bientôt,<br>
{{ config('app.name') }}
@endcomponent

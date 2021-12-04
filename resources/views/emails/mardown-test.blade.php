@component('mail::message')
# Introduction

Coucou les stalkers :) .

@component('mail::button', ['url' => $url, 'color' => 'success' ])
Clique ici!
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent

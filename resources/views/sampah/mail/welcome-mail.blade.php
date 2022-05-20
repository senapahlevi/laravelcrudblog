@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
<h1>{{$details['body']}}</h2>
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

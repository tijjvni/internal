@component('mail::message')
# Your client profile has been created successfully.

Dear {{$client->name}},

We look forward to communicating more with you through this channel.

@component('mail::button', ['url' => '/clients/'])
Go to profile
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

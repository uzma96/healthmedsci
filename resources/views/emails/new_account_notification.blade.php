@component('mail::message')
# New Account Notification

Your Account Created Successfully.

@component('mail::table')
| Username        | Password           |
|:-------------:   |:-------------:      |
| {{$user['email']}}| {{$user['password']}}|

@endcomponent

@component('mail::button', ['url' => loginUrl(),'color' => 'green'])
    Click to Login Your Account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
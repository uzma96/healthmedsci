@component('mail::message')
# Password Recovery

To reset password please click Reset Password Button Now

@component('mail::button', ['url' => $url])
    Reset Password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

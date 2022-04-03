@component('mail::message')
# New Publication Notification

A new publication request has been processed.

@component('mail::button', ['url' => $url])
    Login to View
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
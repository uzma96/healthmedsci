@component('mail::message')
# Publication Modification Notification

A publication has been modified after review.

@component('mail::button', ['url' => $url])
View Publication
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

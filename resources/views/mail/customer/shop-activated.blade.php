@component('mail::message')
# Congratulations!!

Your Shop has been Activated.

@component('mail::button', ['url' => route('shops.show')])
Visit Your Shop
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

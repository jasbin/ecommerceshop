@component('mail::message')
# Shop activation request

please activate shop. Here are the shop details
Shop Name: {{$shop->name}}
Shop Description:{{$shop->owner->name}}

@component('mail::button', ['url' => env('APP_URL').'/admin/shops'])
Manage Shops
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

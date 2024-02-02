<x-mail::message>
# Your Transcation Has Been Confirmed

Hi {{ $checkout->User->name }}
<br>
Your transcation has been confirmed, now you can enjoy the benefits of <b>{{ $checkout->Camp->title }}</b> camp.
<x-mail::button :url="$url">
My Dashboard
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

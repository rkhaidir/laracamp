<x-mail::message>
# Register Camp: {{ $checkout->Camp->title }}

Hi {{ $checkout->User->name }}
<br>
Thank you for your register on <b>{{ $checkout->Camp->title }}</b>. Please see payment instruction by click the button below.

The body of your message.

<x-mail::button :url="$url">
Get Invoice
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
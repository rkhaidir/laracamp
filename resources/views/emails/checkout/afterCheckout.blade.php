<x-mail::message>
# Register Camp: {{ $checkout->Camp->title }}

Hi {{ $checkout->User->name }}
<br>
Thank you for your register on <b>{{ $checkout->Camp->title }}</b>. Please see payment instruction by click the button below.

<x-mail::button :url="$url">
My Dashboard
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

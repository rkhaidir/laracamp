<x-mail::message>
# Welcome to Laracamp

Hi {{ $user->name }}
<br>
Welcome to Laracamp, your account has been created successfully. Now you can choose your favorite course.

<x-mail::button :url="$url">
Login Here
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

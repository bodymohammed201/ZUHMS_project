@component('mail::message')
# {{$name}}

Your appointment has been booked for the date:{{$appointment}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent

@component('mail::message')
# {{$details['subject']}}

Naam: {{$details['firstname']}} {{$details['lastname']}}<br>
E-mailadres: {{$details['email']}}<br>
telefoonnummer: {{$details['phone_nr']}}<br>


{{$details['message']}}

@endcomponent

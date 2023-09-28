@component('mail::message')
Prezado {{$ownerName}}

{{$informations}}

@component('mail::button',['url' => route('animals.index')])
   Gerenciar
@endcomponent

@endcomponent

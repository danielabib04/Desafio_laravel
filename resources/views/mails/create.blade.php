@include('layouts.navigation')
<x-listing-layout title="Envie um e-mail para todos os proprietários">
    @isset($message_sucess)
    <div class="alert alert-success">
        {{$message_sucess}}
    </div>
    @endisset
    <x-mails.form :action="route('mails.store')" :update="false"/>
</x-listing-layout>

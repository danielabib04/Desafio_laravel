@include('layouts.navigation')

<x-listing-layout title="Editar Proprietário - {!! $owner->fullName !!}">
    <x-owners.form :action="route('owners.update', $owner->id)" :owner="$owner" :update="true"/>
</x-listing-layout>
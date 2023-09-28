@include('layouts.navigation')

<x-listing-layout title="Lista de Proprietários">
    <x-owners.form :action="route('owners.store')" :name="old('fullName')" :update="false"/>
</x-listing-layout>

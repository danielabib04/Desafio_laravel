@include('layouts.navigation')

<x-listing-layout title="Animal List">
    <x-animals.form :action="route('animals.store')" :name="old('name')" :update="false"/>
</x-listing-layout>

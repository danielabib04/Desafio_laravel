@include('layouts.navigation')

<x-listing-layout title="Animal Edit - {!! $animal->name !!}">
     <x-animals.form :action="route('animals.update', $animal->id)" :animal="$animal" :update="true"/>
</x-listing-layout>
@include('layouts.navigation')

<x-listing-layout title="Editar Consulta - {{ $appointment->id }}">
     <x-appointments.form :action="route('appointments.update', $appointment->id)" :appointment="$appointment" :update="true"/>
</x-listing-layout>
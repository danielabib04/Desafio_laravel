@include('layouts.navigation')

<x-listing-layout title="Adicionar Funcionário">
    <x-employees.form :action="route('employees.store')" :name="old('name')" :update="false"/>
</x-listing-layout>

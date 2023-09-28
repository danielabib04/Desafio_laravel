@include('layouts.navigation')

<x-listing-layout title="Editar Funcionario - {!! $employee->name !!}">
     <x-employees.form action="{{route('employees.update',$employee->id)}}" :employee="$employee" :update="true"/>
</x-listing-layout>
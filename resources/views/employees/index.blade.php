@include('layouts.navigation')

<x-listing-layout title="Lista de Funcionários">
        @isset($message_sucess)
        <div class="alert alert-success">
            {{$message_sucess}}
        </div>
        @endisset
    
        <a href="{{route('employees.create')}}" class="btn btn-dark mb-2">Adicionar</a>
    
        <ul class="list-group">
    
            @foreach($employees as $employee)
            <li class="list-group-item d-flex justify-content-between align-items-center ">
                <div class="d-flex justify-content-around align-items-center" style="gap: 1em;">
                    <div>{{$employee->id}}</div>
                    <div class="vr"></div>
                    <div>{{$employee->name}}</div>
                    <div class="vr"></div>
                    <div>E-mail: {{$employee->email}}</div>
                    <div class="vr"></div>
                    <div>Telefone: {{$employee->telephone}}</div>
                    <div class="vr"></div>
                    <div>Periodo: {{$employee->workingPeriod}}</div>
                </div>
    
                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{route('employees.edit', $employee->id)}}" class="btn btn-primary btn-sm p-2"><i class="fa-solid fa-pencil"></i></a>
    
    
                    <form action="{{ route('employees.destroy', $employee->id) }}" method="post"
                        onsubmit="return confirm('Tem certeza que deseja remover este funcionario? {{addslashes($employee->id)}}')"
                        class="m-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm p-2"><i class="far fa-trash-alt"></i></button> 
                    </form>
                </div>
    
            </li>
            @endforeach
    
        </ul>
    
        <script>
            const owners = {{Js::from($employees)}};
        </script>
    </x-listing-layout>
    
    
@include('layouts.navigation')

<x-listing-layout title="Lista de Consultas">
        @isset($message_sucess)
        <div class="alert alert-success">
            {{$message_sucess}}
        </div>
        @endisset
    
        <a href="{{route('appointments.create')}}" class="btn btn-dark mb-2">Adicionar</a>
    
        <ul class="list-group">
    
            @foreach($appointments as $appointment)
            <li class="list-group-item d-flex justify-content-between align-items-center ">
                <div class="d-flex justify-content-around" style="gap: 1em;">
                    <div>{{$appointment->id}}</div>
                    <div class="vr"></div>
                    <div>Animal: {{$appointment->animal->name}}</div>
                    <div class="vr"></div>
                    <div>Veterinário: {{$appointment->user->name}}</div>
                    <div class="vr"></div>
                    <div>Início: {{$appointment->startTime}}</div>
                    <div class="vr"></div>
                    <div>Fim: {{$appointment->endTime}}</div>
                </div>
    
                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{route('appointments.edit', $appointment->id)}}" class="btn btn-primary btn-sm p-2"><i class="fa-solid fa-pencil"></i></a>
    
    
                    <form action="{{ route('appointments.destroy', $appointment->id) }}" method="post"
                        onsubmit="return confirm('Tem certeza que deseja remover esta consulta? {{addslashes($appointment->id)}}')"
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
            const owners = {{Js::from($appointments)}};
        </script>
    </x-listing-layout>
    
    
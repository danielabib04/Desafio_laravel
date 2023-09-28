@include('layouts.navigation')

<x-listing-layout title="Lista de Animais">
    @isset($message_sucess)
    <div class="alert alert-success">
        {{$message_sucess}}
    </div>
    @endisset

    <a href="{{route('animals.create')}}" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">

        @foreach($animals as $animal)
        <li class="list-group-item d-flex justify-content-between align-items-center ">
            <div class="d-flex flex-row" style="gap: 1em;">
                <div>{{$animal->id}}</div>
                <div class="vr"></div>
                <div>Animal: {{$animal->name}}</div>
                <div class="vr"></div>
                <div>Proprietário: {{$animal->owner->fullName}}</div>
            </div>
            

            <div class="d-flex justify-content-between align-items-center">
                <a href="{{route('animals.edit', $animal->id)}}" class="btn btn-primary btn-sm p-2"><i class="fa-solid fa-pencil"></i></a>


                <form action="{{ route('animals.destroy', $animal->id) }}" method="post"
                    onsubmit="return confirm('Tem certeza que deseja remover este animal? {{addslashes($animal->name)}}')"
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
        const animals = {{Js::from($animals)}};
    </script>
</x-listing-layout>


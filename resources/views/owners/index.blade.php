@include('layouts.navigation')

<x-listing-layout title="Lista de Proprietários">
    @isset($message_sucess)
    <div class="alert alert-success">
        {{$message_sucess}}
    </div>
    @endisset

    <a href="{{route('owners.create')}}" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">

        @foreach($owners as $owner)
        <li class="list-group-item d-flex justify-content-between align-items-center ">
            <div class="d-flex flex-row" style="gap: 1em;">
                <div>{{$owner->id}}</div>
                <div>{{$owner->fullName}}</div>
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <a href="{{route('owners.edit', $owner->id)}}" class="btn btn-primary btn-sm p-2"><i class="fa-solid fa-pencil"></i></a>


                <form action="{{ route('owners.destroy', $owner->id) }}" method="post"
                    onsubmit="return confirm('Tem certeza que deseja remover este owner? {{addslashes($owner->fullName)}}')"
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
        const owners = {{Js::from($owners)}};
    </script>
</x-listing-layout>


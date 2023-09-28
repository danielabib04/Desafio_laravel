<x-app-layout>
    @vite(['resources/js/app.js', 'resources/css/app.scss']);
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="d-flex flex-row justify-content-around">
                <div class="card text-center" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Animais</h5>
                      <a href="{{route('animals.index')}}" class="btn btn-primary">Gerenciar</a>
                    </div>
                </div>
                <div class="card text-center" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Consultas</h5>
                      <a href="{{route('appointments.index')}}" class="btn btn-primary">Gerenciar</a>
                    </div>
                </div>
                <div class="card text-center" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Proprietarios</h5>
                      <a href="{{route('owners.index')}}" class="btn btn-primary">Gerenciar</a>
                    </div>
                </div>
                <div class="card text-center" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Relatório Geral</h5>
                      <a href="{{route('print.generate')}}" class="btn btn-primary">Imprimir Relatório</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

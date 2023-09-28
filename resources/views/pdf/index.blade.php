<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Relatório de Consultas</title>
        <style>
            h1{
                font-size: 1.4em;
            }
            table{
                width: 100%;

            }
            table thead{
                    gap: 20px;
                    background-color: gray;
            }
        </style>
    </head>
    <body>

    <header>
        <h1>Relatório de Consultas Veterinárias</h1>
        <p>Funcionário: {{$employee}}</p>
        <p>Data e Hora de Emissão: {{$time}}</p>
    </header>




    <h1>Janeiro</h1>
    <table>
        <thead>
            <tr>
                <th>Nome do Animal</th>
                <th>Dono</th>
                <th>Tratamento Realizado</th>
                <th>Data da Consulta</th>
            </tr>
        </thead>

        <tbody>
        @foreach($appointments as $appointment)
            @if(date('m', strtotime($appointment->startTime)) == 1)
            <tr>
                <td>{{$appointment->animal->name}}</td>
                <td>{{$appointment->animal->owner->fullName}}</td>
                <td>{{$appointment->treatments}}</td>
                <td>{{date('d-m-Y', strtotime($appointment->startTime))}}</td>
            </tr>
            @endif
        @endforeach
        </tbody>
    </table>

    <h1>Fevereiro</h1>
    <table>
        <thead>
            <tr>
                <th>Nome do Animal</th>
                <th>Dono</th>
                <th>Tratamento Realizado</th>
                <th>Data da Consulta</th>
            </tr>
        </thead>

        <tbody>
            @foreach($appointments as $appointment)
            @if(date('m', strtotime($appointment->startTime)) == 2)
            <tr>
                <td>{{$appointment->animal->name}}</td>
                <td>{{$appointment->animal->owner->fullName}}</td>
                <td>{{$appointment->treatments}}</td>
                <td>{{date('d-m-Y', strtotime($appointment->startTime))}}</td>
            </tr>
            @endif
        @endforeach
        </tbody>
    </table>

    <h1>Março</h1>
    <table>
        <thead>
            <tr>
                <th>Nome do Animal</th>
                <th>Dono</th>
                <th>Tratamento Realizado</th>
                <th>Data da Consulta</th>
            </tr>
        </thead>

        <tbody>
        @foreach($appointments as $appointment)
            @if(date('m', strtotime($appointment->startTime)) == 3)
            <tr>
                <td>{{$appointment->animal->name}}</td>
                <td>{{$appointment->animal->owner->fullName}}</td>
                <td>{{$appointment->treatments}}</td>
                <td>{{date('d-m-Y', strtotime($appointment->startTime))}}</td>
            </tr>
            @endif
        @endforeach
        </tbody>
    </table>

    <h1>Abril</h1>
    <table>
        <thead>
            <tr>
                <th>Nome do Animal</th>
                <th>Dono</th>
                <th>Tratamento Realizado</th>
                <th>Data da Consulta</th>
            </tr>
        </thead>

        <tbody>
        @foreach($appointments as $appointment)
            @if(date('m', strtotime($appointment->startTime)) == 4)
            <tr>
                <td>{{$appointment->animal->name}}</td>
                <td>{{$appointment->animal->owner->fullName}}</td>
                <td>{{$appointment->treatments}}</td>
                <td>{{date('d-m-Y', strtotime($appointment->startTime))}}</td>
            </tr>
            @endif
        @endforeach
        </tbody>
    </table>

    <h1>Maio</h1>
    <table>
        <thead>
            <tr>
                <th>Nome do Animal</th>
                <th>Dono</th>
                <th>Tratamento Realizado</th>
                <th>Data da Consulta</th>
            </tr>
        </thead>

        <tbody>
        @foreach($appointments as $appointment)
            @if(date('m', strtotime($appointment->startTime)) == 5)
            <tr>
                <td>{{$appointment->animal->name}}</td>
                <td>{{$appointment->animal->owner->fullName}}</td>
                <td>{{$appointment->treatments}}</td>
                <td>{{date('d-m-Y', strtotime($appointment->startTime))}}</td>
            </tr>
            @endif
        @endforeach
        </tbody>
    </table>

    <h1>Junho</h1>

    <table>
        <thead>
            <tr>
                <th>Nome do Animal</th>
                <th>Dono</th>
                <th>Tratamento Realizado</th>
                <th>Data da Consulta</th>
            </tr>
        </thead>

        <tbody>
        @foreach($appointments as $appointment)
            @if(date('m', strtotime($appointment->startTime)) == 6)
            <tr>
                <td>{{$appointment->animal->name}}</td>
                <td>{{$appointment->animal->owner->fullName}}</td>
                <td>{{$appointment->treatments}}</td>
                <td>{{date('d-m-Y', strtotime($appointment->startTime))}}</td>
            </tr>
            @endif
        @endforeach
        </tbody>
    </table>

    <h1>Julho</h1>
    <table>
        <thead>
            <tr>
                <th>Nome do Animal</th>
                <th>Dono</th>
                <th>Tratamento Realizado</th>
                <th>Data da Consulta</th>
            </tr>
        </thead>

        <tbody>
        @foreach($appointments as $appointment)
            @if(date('m', strtotime($appointment->startTime)) == 7)
            <tr>
                <td>{{$appointment->animal->name}}</td>
                <td>{{$appointment->animal->owner->fullName}}</td>
                <td>{{$appointment->treatments}}</td>
                <td>{{date('d-m-Y', strtotime($appointment->startTime))}}</td>
            </tr>
            @endif
        @endforeach
        </tbody>
    </table>

    <h1>Agosto</h1>
    <table>
        <thead>
            <tr>
                <th>Nome do Animal</th>
                <th>Dono</th>
                <th>Tratamento Realizado</th>
                <th>Data da Consulta</th>
            </tr>
        </thead>

        <tbody>
        @foreach($appointments as $appointment)
            @if(date('m', strtotime($appointment->startTime)) == 8)
            <tr>
                <td>{{$appointment->animal->name}}</td>
                <td>{{$appointment->animal->owner->fullName}}</td>
                <td>{{$appointment->treatments}}</td>
                <td>{{date('d-m-Y', strtotime($appointment->startTime))}}</td>
            </tr>
            @endif
        @endforeach
        </tbody>
    </table>

    <h1>Setembro</h1>
    <table>
        <thead>
            <tr>
                <th>Nome do Animal</th>
                <th>Dono</th>
                <th>Tratamento Realizado</th>
                <th>Data da Consulta</th>
            </tr>
        </thead>

        <tbody>
        @foreach($appointments as $appointment)
            @if(date('m', strtotime($appointment->startTime)) == 9)
            <tr>
                <td>{{$appointment->animal->name}}</td>
                <td>{{$appointment->animal->owner->fullName}}</td>
                <td>{{$appointment->treatments}}</td>
                <td>{{date('d-m-Y', strtotime($appointment->startTime))}}</td>
            </tr>
            @endif
        @endforeach
        </tbody>
    </table>

    <h1>Outubro</h1>
    <table>
        <thead>
            <tr>
                <th>Nome do Animal</th>
                <th>Dono</th>
                <th>Tratamento Realizado</th>
                <th>Data da Consulta</th>
            </tr>
        </thead>

        <tbody>
        @foreach($appointments as $appointment)
            @if(date('m', strtotime($appointment->startTime)) == 10)
            <tr>
                <td>{{$appointment->animal->name}}</td>
                <td>{{$appointment->animal->owner->fullName}}</td>
                <td>{{$appointment->treatments}}</td>
                <td>{{date('d-m-Y', strtotime($appointment->startTime))}}</td>
            </tr>
            @endif
        @endforeach
        </tbody>
    </table>

    <h1>Novembro</h1>
    <table>
        <thead>
            <tr>
                <th>Nome do Animal</th>
                <th>Dono</th>
                <th>Tratamento Realizado</th>
                <th>Data da Consulta</th>
            </tr>
        </thead>

        <tbody>
        @foreach($appointments as $appointment)
            @if(date('m', strtotime($appointment->startTime)) == 11)
            <tr>
                <td>{{$appointment->animal->name}}</td>
                <td>{{$appointment->animal->owner->fullName}}</td>
                <td>{{$appointment->treatments}}</td>
                <td>{{date('d-m-Y', strtotime($appointment->startTime))}}</td>
            </tr>
            @endif
        @endforeach
        </tbody>
    </table>

    <h1>Dezembro</h1>
    <table>
        <thead>
            <tr>
                <th>Nome do Animal</th>
                <th>Dono</th>
                <th>Tratamento Realizado</th>
                <th>Data da Consulta</th>
            </tr>
        </thead>

        <tbody>
        @foreach($appointments as $appointment)
            @if(date('m', strtotime($appointment->startTime)) == 12)
            <tr>
                <td>{{$appointment->animal->name}}</td>
                <td>{{$appointment->animal->owner->fullName}}</td>
                <td>{{$appointment->treatments}}</td>
                <td>{{date('d-m-Y', strtotime($appointment->startTime))}}</td>
            </tr>
            @endif
        @endforeach
        </tbody>
    </table>
</body>
</html>
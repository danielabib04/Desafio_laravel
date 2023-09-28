<form action="{{ $action }}" method="post">
    @csrf
    @if($update)
    @method('PUT')
    @endif
    <div class="mb-3">
        @if(Auth()->user()->isAdmin)
            <label for="name" class="form-label">
                Veterinário Responsável:
            </label>
            <input type="number"
                    name="user_id" 
                    id="user_id" 
                    class="form-control" 
                    @isset($appointment)value="{{$appointment->user_id}}" @endisset/>            
        @else
        <label for="name" class="form-label">
            Veterinário Responsável:
        </label>
        <input type="number"
                name="user_id" 
                id="user_id" 
                class="form-control" 
                disabled
                @isset($appointment)value="{{$appointment->user_id}}"@else value="{{Auth()->user()->id}}" @endisset/>   
        @endif
        <label for="animal_id" class="form-label">
            Animal:
        </label>
        <input type="number" 
                name="animal_id" 
                id="animal_id" 
                class="form-control" 
                @isset($appointment)value="{{$appointment->animal_id}}" @endisset/>
        <label for="treatments" class="form-label">
            Tratamentos:
        </label>
        <textarea
                name="treatments" 
                id="treatments" 
                class="form-control" 
                >
                @isset($appointment){{$appointment->treatments}} @endisset
        </textarea>

        <label for="cost" class="form-label">
            Custo da consulta:
        </label>
        <input type="number" 
                name="cost" 
                id="cost" 
                class="form-control" 
                @isset($appointment)value="{{$appointment->cost}}" @endisset/>
        <label for="startTime" class="form-label">
            Horário de início:
        </label>
        <input type="datetime-local" 
                name="startTime" 
                id="startTime" 
                class="form-control" 
                @isset($appointment)value="{{$appointment->startTime}}" @endisset/>
        <label for="endTime" class="form-label">
            Horário de encerramento:
        </label>
        <input type="datetime-local" 
                name="endTime" 
                id="endTime" 
                class="form-control" 
                @isset($appointment)value="{{$appointment->endTime}}" @endisset/>
    
    </div>

    <button type="submit" class="btn btn-primary">Adicionar</button> 
</form>
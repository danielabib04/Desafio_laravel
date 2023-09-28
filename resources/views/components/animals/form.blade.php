<form action="{{ $action }}" method="post">
    @csrf
    @if($update)
    @method('PUT')
    @endif

    <div class="mb-3">
        <label for="owner_id" class="form-label">
            Proprietário:
        </label>
        <input type="number"
                name="owner_id" 
                id="owner_id" 
                class="form-control" 
                @isset($animal)value="{{$animal->owner_id}}" @endisset/>
        <label for="name" class="form-label">
            Nome:
        </label>
        <input type="text" 
                name="name" 
                id="name" 
                class="form-control" 
                @isset($animal)value="{{$animal->name}}" @endisset/>
        <label for="specie" class="form-label">
            Espécie:
        </label>
        <input type="text" 
                name="specie" 
                id="specie" 
                class="form-control" 
                @isset($animal)value="{{$animal->specie}}" @endisset/>
        <label for="breed" class="form-label">
            Raça:
        </label>
        <input type="text" 
                name="breed" 
                id="breed" 
                class="form-control" 
                @isset($animal)value="{{$animal->breed}}" @endisset/>
        <label for="treatments" class="form-label">
            Tratamentos:
        </label>
        <input type="textarea" 
                name="treatments" 
                id="treatments" 
                class="form-control" 
                @isset($animal)value="{{$animal->treatments}}" @endisset/>
        <label for="birthDate" class="form-label">
            Data de nascimento:
        </label>
        <input type="date" 
                name="birthDate" 
                id="birthDate" 
                class="form-control" 
                @isset($animal)value="{{$animal->birthDate}}" @endisset/>
    
    </div>

    <button type="submit" class="btn btn-primary">Adicionar</button> 
</form>
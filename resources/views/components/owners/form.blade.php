<form action="{{ $action }}" method="post">
    @csrf
    @if($update)
    @method('PUT')
    @endif

    <div class="mb-3">
        <label for="fullName" class="form-label">
            Nome Completo:
        </label>
        <input type="text" 
                name="fullName" 
                id="fullName" 
                class="form-control" 
                @isset($owner)value="{{$owner->fullName}}" @endisset/>
        <label for="email" class="form-label">
            E-mail:
        </label>
        <input type="email" 
                name="email" 
                id="email" 
                class="form-control" 
                @isset($owner)value="{{$owner->email}}" @endisset/>
        <label for="address" class="form-label">
            Endereço:
        </label>
        <input type="text" 
                name="address" 
                id="address" 
                class="form-control" 
                @isset($owner)value="{{$owner->address}}" @endisset/>
        <label for="telephone" class="form-label">
            Telefone de contato:
        </label>
        <input type="tel" 
                name="telephone" 
                id="telephone" 
                class="form-control" 
                @isset($owner)value="{{$owner->telephone}}" @endisset/>
        <label for="birthDate" class="form-label">
            Data de nascimento:
        </label>
        <input type="date" 
                name="birthDate" 
                id="birthDate" 
                class="form-control" 
                @isset($owner)value="{{$owner->birthDate}}" @endisset/>
    
    </div>

    <button type="submit" class="btn btn-primary">Adicionar</button> 
</form>
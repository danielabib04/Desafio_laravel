<form action="{{ $action }}" method="post">
    @csrf
    @if($update)
    @method('PUT')
    @endif

    <div class="mb-3">
        <label for="name" class="form-label">
            Nome
        </label>
        <input type="text"
                name="name" 
                id="name" 
                class="form-control" 
                @isset($employee)value="{{$employee->name}}" @endisset/>

        <label for="email" class="form-label">
            Email:
        </label>
        <input type="email" 
                name="email" 
                id="email" 
                class="form-control" 
                @isset($employee)value="{{$employee->email}}" @endisset/>

        <label for="password" class="form-label">
            Senha:
        </label>
        <input type="password" 
                name="password" 
                id="password" 
                class="form-control" />
        <label for="birthDate" class="form-label">

            Data de Nascimento:
        </label>
        <input type="date" 
                name="birthDate" 
                id="birthDate" 
                class="form-control" 
                @isset($employee)value="{{$employee->birthDate}}" @endisset/>
        <label for="address" class="form-label">
            Endereço:
        </label>
        <input type="address"
                name="address" 
                id="address" 
                class="form-control" 
                @isset($employee)value="{{$employee->address}}" @endisset/>
        <label for="telephone" class="form-label">
            Telefone de contato:
        </label>
        <input type="tel" 
                name="telephone" 
                id="telephone" 
                class="form-control" 
                @isset($employee)value="{{$employee->telephone}}" @endisset/>
        <label for="workingPeriod" class="form-label">
            Periodo de trabalho:
        </label>
        <input type="text"
                name="workingPeriod" 
                id="workingPeriod" 
                class="form-control" 
                @isset($employee)value="{{$employee->workingPeriod}}" @endisset/>
    
    </div>

    <button type="submit" class="btn btn-primary">Adicionar</button> 
</form>
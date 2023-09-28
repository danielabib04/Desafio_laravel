

<form action="{{ $action }}" method="post">
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">
            Assunto:
        </label>
        <input type="text"
                name="subject" 
                id="subject" 
                class="form-control"/>
        <label for="informations" class="form-label">
            Conteudo do e-mail:
        </label>
        <textarea
                name="informations" 
                id="informations" 
                class="form-control" 
                rows="20"
                >
        </textarea>
    <button type="submit" class="btn btn-primary">Enviar</button> 
</form>
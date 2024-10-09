<div class="card p-5">
    <p class="mb-3">Contactos</p>

    @if($contacts->count() == 0)
        <div class="alert alert-warning">Nenhum contacto encontrado</div>
    @endif

    @foreach($contacts as $contact)
        <div class="card bk-dark p-3 mb-1">
            <div class="row">
                <div class="col">Nomes: {{ $contact->name }}</div>
                <div class="col">Email: {{ $contact->email }}</div>
                <div class="col">Telefone: {{ $contact->phone }}</div>
                <div class="col">
                    <a href="{{ route('contacts-edit', ['id' => $contact->id])}}" class="btn btn-sm btn-success">Editar</a>
                    <a href="{{ route('contacts-delete', ['id' => $contact->id])}}" class="btn btn-sm btn-danger">Deletar</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

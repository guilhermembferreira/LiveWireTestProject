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
            </div>
        </div>
    @endforeach
</div>

@extends('app')

@section('title', 'Cadastro de cliente')
@section('content')
<h1>Novo Cliente</h1>
<form action="{{ route('clients.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome..." required>
    </div>

    <div class="mb-3">
        <label for="endereco" class="form-label" required>Endereço</label>
        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o endereço..." required>
    </div>

    <div class="mb-3">
        <label for="observacao" class="form-label" required>Observação</label>
        <textarea type="text" class="form-control" id="observacao" name="observacao" cols="30" rows="10" placeholder="Digite a obervação..." required></textarea>
    </div>

    <button class="btn btn-success" type="submit">Enviar</button>
</form>
@endsection
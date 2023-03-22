@extends('app')

@section('title', 'Editar de cliente')
@section('content')
<h1>Editar Cliente</h1>
<form action="{{ route('clients.update', $client) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" value="{{ $client->nome }}" class="form-control" id="nome" name="nome" placeholder="Digite o nome...">
    </div>

    <div class="mb-3">
        <label for="endereco" class="form-label">Endereço</label>
        <input type="text" value="{{ $client->endereco }}" class="form-control" id="endereco" name="endereco" placeholder="Digite o endereço...">
    </div>

    <div class="mb-3">
        <label for="observacao" class="form-label">Observação</label>
        <textarea type="text" class="form-control" id="observacao" name="observacao" cols="30" rows="10" placeholder="Digite a obervação...">
            {{ $client->observacao }}
        </textarea>
    </div>

    <button class="btn btn-success" type="submit">Salvar</button>
</form>
@endsection
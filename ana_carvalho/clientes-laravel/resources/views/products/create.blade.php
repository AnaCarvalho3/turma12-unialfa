@extends('app')

@section('title', 'Cadastro de produto')
@section('content')
<h1>Novo produto</h1>
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="descricao" class="form-label">Descrição</label>
        <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Digite a descricao...">
    </div>

    <div class="mb-3">
        <label for="valor" class="form-label">Valor</label>
        <input type="number" class="form-control" id="valor" name="valor" placeholder="Digite o valor...">
    </div>

    <button class="btn btn-success" type="submit">Enviar</button>
</form>
@endsection
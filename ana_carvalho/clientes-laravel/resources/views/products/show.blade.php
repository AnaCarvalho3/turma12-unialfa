@extends('app')

@section('title', 'Detalhes do produto')
@section('content')
    <div class="card">
        <div class="card-header">
            Detalhes do produto {{ $product->descricao }}
        </div>
        <div class="card-body">
            <p><strong>ID: </strong>{{ $product->id }}</p>
            <p><strong>Descricao: </strong>{{ $product->descricao }}</p>
            <p><strong>Valor: </strong>{{ $product->valor }}</p>
            <br>
            <a href="{{ route('products.index') }}" class="btn btn-success">
                Voltar para a lista de produtos
            </a>
        </div>
    </div>
@endsection
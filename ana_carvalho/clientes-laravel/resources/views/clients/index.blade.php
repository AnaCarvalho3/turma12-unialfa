@extends('app')

@section('title', 'Lista de clientes')
@section('content')
<h1>Lista de Clientes</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Endereço</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clients as $client)
            <tr>
                <td scope="col">{{ $client->id }}</td>
                <td scope="col">
                    <a href="{{ route('clients.show', $client) }}">
                        {{ $client->nome }}
                    </a>
                </td>
                <td scope="col">{{ $client->endereco }}</td>
                <td scope="col">
                    <a href="{{ route('clients.edit', $client) }}" class="btn btn-primary">Editar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('clients.create') }}" class="btn btn-success">
    Novo Cliente
</a>
@endsection
@extends('site.layouts.basicoauth')

@section('titulo', 'Clientes')

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Clientes</h1>
        </div>
        <div class="container-fornecedores">
            @foreach($clientes as $cliente)
                <div class="fornecedor">
                    <h2>{{ $cliente['nome'] }}</h2>
                    <p>CPF: {{ $cliente['cpf'] }}</p>
                    <p>DDD: {{ $cliente['ddd'] }}</p>
                    <p>Telefone: {{ $cliente['telefone'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
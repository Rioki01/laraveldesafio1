@extends('site.layouts.basicoauth')

@section('titulo', 'Fornecedores')

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Fornecedores</h1>
        </div>
        <div class="container-fornecedores">
            @foreach($fornecedores as $fornecedor)
                <div class="fornecedor">
                    <h2>{{ $fornecedor['nome'] }}</h2>
                    <p>Status: {{ $fornecedor['status'] }}</p>
                    <p>CNPJ: {{ $fornecedor['cnpj'] }}</p>
                    <p>DDD: {{ $fornecedor['ddd'] }}</p>
                    <p>Telefone: {{ $fornecedor['telefone'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
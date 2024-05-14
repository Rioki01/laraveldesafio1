@extends('site.layouts.basicoauth')

@section('titulo', 'Produtos')

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Produtos</h1>
        </div>
        <div class="container-fornecedores">
            @foreach($produtos as $produto)
                <div class="fornecedor">
                    <h2>{{ $produto['nome'] }}</h2>
                    <p>Código: {{ $produto['id'] }}</p>
                    <p>Descrição: {{ $produto['descricao'] }}</p>
                    <p>Estoque: {{ $produto['estoque'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
@extends('site.layouts.basico')
<!-- Utiliza o layout basico criado em layouts. -->
@section('titulo', $titulo)
<!-- Passa o titulo como conteudo, via blade('') e controller($).-->

@section('conteudo')
<!-- Tudo abaixo deste section, é o layout principal da pagina contato. -->
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
        <h1>Entre em contato conosco</h1>
        </div>

        <div class="informacao-pagina">
            <div class="contato-principal">
                @component('site.layouts._components.form_contato', ['classe' => 'borda-preta'])
                <!-- Componente criado de forms na pasta _components -->
                <!-- Todos class no forms vao ser substituidas por 'borda-preta' -->
                <p>A nossa equipe analisará a sua mensagem e retornaremos o mais brevemente possível</p>
                <p>Nosso tempo médio de resposta é de 48 horas</p>
                @endcomponent
            </div>
        </div>
    </div>

    <div class="rodape">
        <div class="redes-sociais">
            <h2>Redes sociais</h2>
            <img src="{{ asset('img/facebook.png') }}">
            <img src="{{ asset('img/linkedin.png') }}">
            <img src="{{ asset('img/youtube.png') }}">
        </div>
        <div class="area-contato">
            <h2>Contato</h2>
            <span>(11) 3333-4444</span>
            <br>
            <span>supergestao@dominio.com.br</span>
        </div>
        <div class="localizacao">
            <h2>Localização</h2>
            <img src="{{ asset('img/mapa.png') }}">
        </div>
    </div>
@endsection
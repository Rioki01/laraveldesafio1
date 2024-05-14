
{{ $slot }}
<form method="POST" action="{{ route('site.login.custom') }}">
    
    @csrf
    <input name="email" type="text" placeholder="E-mail" id="email" class="{{ $classe }} required">
    <br>
    <input name="senha" type="password" placeholder="Senha" id="password" class="{{ $classe }} required">
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
    <p> Não tem uma conta? realize seu <a href="{{ route('site.cadastro') }}">cadastro</a></li></p>
</form>
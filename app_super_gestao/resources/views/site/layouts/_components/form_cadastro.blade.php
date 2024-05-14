
{{ $slot }}
<form method="POST" action="{{ route('site.cadastro.custom') }}">
    @csrf
    <input name="email" type="text" placeholder="E-mail" id="email_address" class="{{ $classe }} required autofocus">
    @if ($errors->has('email'))
        <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
    <br>
    <input name="senha" type="password" placeholder="Senha" id="password" class="{{ $classe }} required autofocus">
    @if ($errors->has('password'))
        <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
    <p> Já tem uma conta? realize seu <a href="{{ route('site.login') }}">login</a></li></p>
</form>
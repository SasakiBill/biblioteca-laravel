@extends('main')
<script>
    
    $request->validate([
    'password' => 'required|confirmed|min:6'
]);
</script>
@section('content')
    <h1>Register</h1>

    <div class="formulario">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <label for="name" class="form-label">Nome: </label>
                <input id="name" name="name" class="form-control @error('name') is-invalid @enderror" type="text" placeholder="digite seu nome" value="{{ old('name') }}">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
                <br>
            <label for="email" class="form-label">E-mail:</label>
                <input id="email" name="email" class="form-control @error('email') is-invalid @enderror" type="email" placeholder="email@email" value="{{ old('email') }}">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
                <br>
            <label for="phone" class="form-label">Telefone Residêncial:</label>
                <input id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror" type="tel" placeholder="(XX) XXXXX-XXXX" value="{{ old('telephone') }}">
                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
                <br>
            <label for="password" class="form-label">Senha:</label>
                <input id="password" name="password" class="form-control @error('password') is-invalid @enderror" type="password" placeholder="digite sua senha">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
                <br>
            <label for="confirmPassword" class="form-label">Confirmar Senha:</label>
                <input id="confirmPassword" name="password_confirmation" class="form-control @error('confirmPassword') is-invalid @enderror" type="password" placeholder="confirme sua senha" id="senhacc">
                @error('confirmPassword')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
                <br>

            <input type="submit" value="Cadastrar!">
        </form>
    </div>
@endsection
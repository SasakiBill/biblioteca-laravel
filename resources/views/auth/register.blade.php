@extends('main')

@section('content')
    <h1>Register</h1>

    <div class="formulario">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <label>Nome: </label>
                <input name="name" class="form-control @error('name') is-invalid @enderror" type="text" placeholder="digite seu nome" value="{{ old('name') }}">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            <label>E-mail:</label>
                <input name="email" lass="form-control @error('email') is-invalid @enderror" type="email" placeholder="email@email" value="{{ old('email') }}">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            <label>Telefone Residêncial:</label>
                <input name="telephone" lass="form-control @error('telephone') is-invalid @enderror" type="tel" placeholder="(XX) XXXXX-XXXX" value="{{ old('telephone') }}">
                @error('telephone')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            <label>Senha:</label>
                <input name="password" lass="form-control @error('password') is-invalid @enderror" type="password" placeholder="digite sua senha" value="{{ old('password') }}">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            <label>Confirmar Senha:</label>
                <input name="password_confirmation" lass="form-control @error('password_confirmation') is-invalid @enderror" type="password" placeholder="confirme sua senha" id="senhacc" value="{{ old('password_confirmation') }}">
                @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            <input type="submit" value="Cadastrar!">
        </form>
    </div>
@endsection
@extends('main')

@section('content')
    <h1>Log In</h1>

    <div class="formulario">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label for="email" class="form-label">E-mail:</label>
                <input name="email" class="form-control @error('email') is-invalid @enderror" type="email" placeholder="email@email" value="{{ old('email') }}">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
                <br>
            <label for="password" class="form-label">Senha:</label>
                <input name="password" class="form-control @error('password') is-invalid @enderror" type="password" placeholder="digite sua senha" value="{{ old('password') }}">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
                <br>
            
                <br>
            <input type="submit" value="Entrar!">
        </form>
    </div>
@endsection
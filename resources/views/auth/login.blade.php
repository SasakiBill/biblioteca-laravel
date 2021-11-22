@extends('layouts.newuser')
@extends('layouts.footeruser')

<section class="loginsection-container">
    <br><br>
    <h1>Acesse sua conta!</h1>

    <div class="formulariodois">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label for="email" class="form-label"></label>
                <input name="email" class="form-control @error('email') is-invalid @enderror" type="email" placeholder="Digite seu Email" value="{{ old('email') }}">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
                <br>
                <br>
            <label for="password" class="form-label"></label>
                <input name="password" class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Digite sua Senha" value="{{ old('password') }}">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
                <br>
                <br>
            <input type="submit" value="Entrar!">
        </form>
        
        <div class="redirect-container">
            <a href="/register">Registre-se!</a>
        </div>
        
        <div class="imagemlogin-container">
            <img src="/img/bibcinco.jpg" alt="bibregister">
        </div>
    </div>
</section>
@extends('layouts.newuser')
@extends('layouts.footeruser')

<section class="registersection-container">
    <br><br>
    <h1>Cadastre-se!</h1>

    <div class="formulario">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <label for="name" class="form-label"></label>
                <input id="name" name="name" class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Digite seu Nome" value="{{ old('name') }}">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
                <br>
                <br>
            <label for="email" class="form-label"></label>
                <input id="email" name="email" class="form-control @error('email') is-invalid @enderror" type="email" placeholder="Digite seu Email" value="{{ old('email') }}">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
                <br>
                <br>
            <label for="phone" class="form-label"></label>
                <input id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror" type="tel" placeholder="Digite seu Telefone" value="{{ old('telephone') }}">
                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
                <br>
                <br>
            <label for="password" class="form-label"></label>
                <input id="password" name="password" class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Digite sua Senha">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
                <br>
                <br>
            <label for="confirmPassword" class="form-label"></label>
                <input id="confirmPassword" name="password_confirmation" class="form-control @error('confirmPassword') is-invalid @enderror" type="password" placeholder="Confirme sua Senha" id="senhacc">
                @error('confirmPassword')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
                <br>
                <br>

            <input type="submit" value="Cadastrar!">
        </form>

        <div class="return-container">
            <a href="/login">Voltar à Tela de Login</a>
        </div>

        <div class="imagemregistro-container">
            <img src="/img/bibquatro.jpg" alt="bibregister">
        </div>
    </div>
</section>
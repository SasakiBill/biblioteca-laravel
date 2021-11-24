@extends('layouts.newuser')
@extends('layouts.bootstrapfooter')

<section class="registersection-container">
    <div class="container" style="margin-left: 5vw; margin-top:2vw">
        <h1>Biblio</h1>
    </div>
    <div class="container float-start">
        <div style="margin-left: 0vw">
            <h1>Acesse Sua Conta!</h1>
        </div>
        <div class="form-group row" style="margin-left: 0vw">
            <form class="form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-outline mb-4">
                    <label id="form3Example3" for="email" class="form-label"></label>
                    <input id="form3Example3" name="email" class="form-control @error('email') is-invalid @enderror" type="email" placeholder="Digite seu Email" value="{{ old('email') }}">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="form-outline mb-4">
                    <label for="typePassword" class="form-label"></label>
                    <input id="typePassword" name="password" class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Digite sua Senha">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <button class="btn btn-dark" type="submit">Cadastrar!</button>
                <div style="margin-top: 2vw">
                    <a href="/register">Registre-se!</a>
                </div>
            </form>



        </div>
        <div class="float-end" style="margin-top: -25vw; margin-left: 27vw">
            <img src="/img/bibcinco.jpg" class="img-thumbnail h-53"  alt="bibregister" >
        </div>
    </div>
</section>

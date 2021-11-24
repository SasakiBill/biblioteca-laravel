@extends('layouts.newuser')
@extends('layouts.bootstrapfooter')

<section class="registersection-container">
    <div class="container" style="margin-left: 5vw; margin-top:2vw">
        <h1>Biblio</h1>
    </div>
    <div class="container float-start">
        <div style="margin-left: 0vw">
            <h1>Cadastre-se!</h1>
        </div>
        <div class="form-group row" style="margin-left: 0vw">
            <form class="form" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row mb-4">
                    <div class="col">
                        <div class="col-xs-3">
                            <label for="name" class="form-label"></label>
                            <input id="form3Example2" name="name" class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Digite seu Nome" value="{{ old('name') }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
    
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
                    <label for="typePhone" class="form-label"></label>
                    <input id="typePhone" name="phone" class="form-control @error('typePhone') is-invalid @enderror" type="tel" placeholder="Digite seu Telefone" value="{{ old('telephone') }}">
                    @error('typePhone')
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
                
                <div class="form-outline mb-4">
                    <label for="confirmPassword" class="form-label"></label>
                    <input id="confirmPassword" name="password_confirmation" class="form-control @error('confirmPassword') is-invalid @enderror" type="password" placeholder="Confirme sua Senha" id="senhacc">
                    @error('confirmPassword')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
    
    
                <button class="btn btn-dark" type="submit">Cadastrar!</button>
                <div style="margin-top: 2vw">
                    <a href="/login">Voltar à Tela de Login</a>
                </div>
            </form>
    
            
    
        </div>
        <div class="float-end" style="margin-top: -40vw; margin-left: 27vw">
            <img src="/img/bibquatro.jpg" class="img-thumbnail h-55"  alt="bibregister" >
        </div>
    </div>
</section>
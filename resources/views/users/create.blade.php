{{-- @extends('layouts.topnavuser') --}}
@extends('app')
{{-- @extends('layouts.footeruser') --}}

@section('content')
    <div class="container">
        <div id="layoutSidenav_content">
            <main>
                <div class=" ">
                    <h1 class="mt-4">Criar Usuário</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item">
                            <a href="/users">Usuários</a>
                        </li>
                        <li class="breadcrumb-item active">Criar Usuário</li>
                    </ol>
                    <div class="card  bg-transparent" style="margin-left: -15.8vw; margin-top: -3vw">
                        <div class="card-body border border-end-0">
                            <form method="POST" action="{{ route('users.store') }}">
                                @csrf
                                <div class="form-group mt-3">
                                    <label for="name">Nome</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="name"
                                        name="name"
                                        placeholder="Digite seu nome">
                                </div>

                                <div class="form-group mt-3">
                                    <label for="email">Email</label>
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="email"
                                        name="email"
                                        placeholder="Digite seu email">
                                </div>

                                <div class="form-group mt-3">
                                    <label for="typePhone">Telefone</label>
                                    <input
                                        type="tel"
                                        class="form-control"
                                        id="typePhone"
                                        name="phone"
                                        placeholder="Digite seu telefone">
                                </div>

                                <div class="form-group mt-3">
                                    <label for="password">Senha</label>
                                    <input
                                        type="password"
                                        class="form-control"
                                        id="password"
                                        name="password"
                                        placeholder="Digite sua senha">
                                </div>

                                <div class="form-group mt-3">
                                    <label for="passwordConfirmation">Confirmar senha</label>
                                    <input
                                        type="password"
                                        class="form-control"
                                        id="passwordConfirmation"
                                        name="password_confirmation"
                                        placeholder="Digite a confirmação de senha">
                                </div>

                                <div class="form-group mt-3 d-flex justify-content-between">
                                    <a href="/users" class="btn btn-dark">Voltar</a>
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection

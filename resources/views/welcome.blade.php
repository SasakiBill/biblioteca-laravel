<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale())}}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width", initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <title>{{ config ('app.name', 'Biblioteca Online')}}</title>
    <link href="/css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="verification-container">
        @if (Route::has('login'))
        <div>
            @auth
                <a href="{{ url('/home') }}">Página Inicial</a>
        </div>
    </div>


    <div class="topnav-container">
        <!--<img src="./view/img/logosite.png">-->
        <div class="rightbuttons-container">
            <div class="topnavbuttons-container">
                <ul>
                    <a href="/">Página Inicial</a>
                    <a href="/biblioteca">Biblioteca</a>
                    <a href="/emprestimos">Meus Empréstimos</a>
                    <a href="/sobre">Sobre</a>
                </ul>
            </div>
            <div class="login-container">
                <div class="botaologin-container">
                    <a href="#openModalConta">Entrar</a>
                </div>
                <div class="modalacesso-container">
                    <a href="#openModal">Criar Conta</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="topnavadmin-container">
        <!--<img src="./view/img/logosite.png">-->
        <div class="rightbuttons-container">
            <div class="topnavbuttons-container">
                <ul>
                    <a href="/">Página Inicial</a>
                    <a href="/biblioteca">Biblioteca</a>
                    <a href="/emprestimos">Meus Empréstimos</a>
                    <a href="/gerencialivro">Gerenciar livros</a>
                    <a href="/sobre">Sobre</a>
                </ul>
            </div>
            <div class="login-container">
                <div class="botaologin-container">
                    <a href="#openModalConta">Entrar</a>
                </div>
                <div class="modalacesso-container">
                    <a href="#openModal">Criar Conta</a>
                </div>
            </div>
        </div>
    </div>
    
</html>
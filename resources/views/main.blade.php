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
            <div class="verification-container">
                <div>   
                    @if (Route::has('login'))
                    <div>
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>
        
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endif
                    </div>
                @endif
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
            <div class="verification-container">
                <div>   
                    @if (Route::has('login'))
                    <div class="botoesverif-container">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        @else
                            <a href="{{ route('login') }}">Login</a>
        
                            @if (Route::has('register'))
                                <a href="{{ route('login') }}">Register</a>
                            @endif
                        @endif
                    </div>
                @endif
                </div>
            </div>
        </div>
    </div>

    <main>
        @yield('content')

        <!--<div class="caixainicial-container">
            <p>Sistema simples para visualização <br> e empréstimos de livros. <br>
                Realize o login para acessar <br>todos os recursos do sistema web. <br>
                Caso ainda não tenha uma conta, sinta-se <br> a vontade para realizar o cadastro <br>
                e utilizar todo o conteúdo do site.</p>
        </div>
        <div class="imageminicial-container">
            <img src="/img/bib.png" alt="biblogo">
        </div>
        <!-- <div class="botaoregister-container">
                <button type="submit" name="botaoregister">Criar Conta</button>
            </div>
        <div class="modalacesso-container">
            <div id="openModalConta" class="modalDialog">
                <a href="#close" title="Close" class="close">X</a>
                <div class="titulo-container">
                    <p>Entre na sua Conta
                    <p>
                </div>
                <div class="formulariodois">
                    <form method="POST" action="/resources/views/welcome.blade.php">
                        <label>E-mail:
                            <input type="email" placeholder="email@email" id="email">
                        </label>
                        <label>Senha:
                            <input type="password" placeholder="digite sua senha" id="senhac">
                        </label>
                        <input type="submit" value="Entrar!">
                    </form>
                </div>
            </div>
        </div>
        
        <div class="modalacesso-container">
            <div id="openModal" class="modalDialog">
                <a href="#close" title="Close" class="close">X</a>
                <div class="titulo-container">
                    <p>Crie sua Conta
                    <p>
                </div>
                <div class="formulario">
                    <form method="POST" action="/resources/views/welcome.blade.php">
                        <label>Name:
                            <input type="text" placeholder="digite seu nome" id="username">
                        </label>
                        <label>E-mail:
                            <input type="email" placeholder="email@email" id="email">
                        </label>
                        <label>Telefone Residêncial:
                            <input type="tel" placeholder="(XX) XXXXX-XXXX" id="fone">
                        </label>
                        <label>Senha:
                            <input type="password" placeholder="digite sua senha" id="senhac">
                        </label>
                        <label>Confirmar Senha:
                            <input type="password" placeholder="confirme sua senha" id="senhacc">
                        </label>
                        <input type="submit" value="Cadastrar!">
                    </form>
                </div>
            </div>
        </div>-->
    </main>
    </body>
    
   


    
    <footer>
        <p>Sistema desenvolvido com o objetivo de treinamento sobre framework laravel e conceitos PHP.</p>
    </footer>
</html>
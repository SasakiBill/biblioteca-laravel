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
                    <a href="/library">Biblioteca</a>
                    <a href="/loans">Meus Empréstimos</a>
                    <a href="/about">Sobre</a>
                </ul>
            </div>
            <div class="verification-container">
                <div>   
                    @if (Route::has('login'))
                    <div>
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
    
    </body>

    <footer>
        <p>Sistema desenvolvido com o objetivo de treinamento sobre framework laravel e conceitos PHP.</p>
    </footer>
</html>
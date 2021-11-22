<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale())}}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width", initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <title>{{ config ('APP_NAME', 'The Midnight Library')}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"></head>
    <link href="/css/main.css" rel="stylesheet" type="text/css">
<body>
    <div class="topnav-container">
        <!--<img src="./view/img/logosite.png">-->
        <div class="rightbuttons-container">
            <nav>
                <ul>
                    <a href="/">Página Inicial</a>
                    <a href="/library">Biblioteca</a>
                    <a href="/loans">Meus Empréstimos</a>
                    <a href="/about">Sobre</a>
                </ul>
            <
            <div>
                <div>   
                    @if (Route::has('login'))
                    <div  class="verification-container">
                        @auth
                            
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                                
                            </form>
                        @else
                            <a href="{{ route('login') }}">Login</a>
        
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Registre-se</a>
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
            <nav>
                <ul>
                    <a href="/">Página Inicial</a>
                    <a href="/biblioteca">Biblioteca</a>
                    <a href="/emprestimos">Meus Empréstimos</a>
                    <a href="/gerencialivro">Gerenciar livros</a>
                    <a href="/sobre">Sobre</a>
                </ul>
            <nav>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
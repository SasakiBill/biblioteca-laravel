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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
    

</html>
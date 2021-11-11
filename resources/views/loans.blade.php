<!DOCTYPE html>
<html>

<head>
    <title>Biblioteca Online - Empréstimos</title>
    <link href="/css/main.css" rel="stylesheet" type="text/css" >
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

                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>

</body>

<footer>
    <p>Sistema desenvolvido com o objetivo de treinamento sobre framework laravel e conceitos PHP.</p>
</footer>

</html>
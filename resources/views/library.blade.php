@extends('layouts.topnavuser')

<section class="library-init">
    <br><br>
    <h1>Livros Disponíveis</h1>
    <table border="1">
        <tr>
            <th>Nome do Livro</th>
            <th>Descrição</th>
            <th>Autor</th>
            <th>Categoria</th>
            <th>Disponibilidade</th>
            <th>Quer emprestar o livro?</th>
        </tr>
        @foreach ($books as $item)
            
            <tr>
                <td>{{ $item->name }} </td>
                <td>{{ $item->description}} </td>
                <td>{{ $item->author }} </td>
                <td>{{ $item->category}} </td>
                <td>{{ $item->book_status }}</td>
                <td> <a href="#">Emprestar livro</a> </td>
            </tr>
        @endforeach
<!--
        <div class="modalacesso-container">
            <a href="#openModal">Abrir Cadastro</a>
    
            <div id="openModal" class="modalDialog">
                <a href="#close" title="Close" class="close">X</a>
                <div class="titulo">
                    <p>Formulário Simples
                    <p>
    
                </div>
            
            <div class="formulario">
                <form method="get">
                    <label>Name:
                        <input type="text" placeholder="example" id="username">
                    </label>
                    <label>E-mail:
                        <input type="email" placeholder="email@email" id="email">
                    </label>
                    <label>CEP:
                        <input name="cep" type="text" id="cep" value="" size="10" maxlength="9"
                            onblur="pesquisacep(this.value);" /></label><br />
                    <label>Street:
                        <input name="rua" type="text" id="rua" size="60" /></label><br />
                    <label>District:
                        <input name="bairro" type="text" id="bairro" size="40" /></label><br />
                    <label>City:
                        <input name="cidade" type="text" id="cidade" size="40" /></label><br />
                    <label>State:
                        <input name="uf" type="text" id="uf" size="2" /></label><br />
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>-->
        </div>
    </table>
</section>
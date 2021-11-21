@extends('layouts.topnavuser')
<section class="section-init">
    <br><br>
    <h1>Meus Livros Emprestados</h1>

    <table border="1">
        <tr>
            <th>ID do livro</th>
            <!--Usando ID apenas para testes//será removido na versão final-->
            <th>Nome do Livro</th>
            <th>Descrição</th>
            <th>Autor</th>
            <th>Categoria</th>
            <th>Data de Devolução</th>
            
        </tr>

    @if(session('loan'))
        @foreach(session('loan') as $id => $loans)
            
            <tr>
                <td>{{ $loans['id'] }}</td>
                <td>{{ $loans['name'] }}</td>
                <td>{{ $loans['description'] }}</td>
                <td>{{ $loans['author'] }} </td>
                <td>{{ $loans['category' ] }} </td>
                <td> <td>
            </tr>
        @endforeach
    @endif
    
</section>
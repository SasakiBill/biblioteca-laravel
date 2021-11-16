@extends('layouts.topnavuser')

<section class="libray-init">
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
    </table>
</section>
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
            <th>Disponibilidade do Livro</th>
        </tr>
        @foreach ($books as $item)
            
            <tr>
                <td>{{ $item->name }} </td>
                <td>{{ $item->description}} </td>
                <td>{{ $item->author }} </td>
                <td>{{ $item->category}} </td>
                <td>{{ $item->book_status }}</td>
            </tr>
        @endforeach
    </table>
</section>
@extends('layouts.topnavuser')
<section class="section-init">
    <br><br>
    <h1>Meus Livros Emprestados</h1>
    <table border="1">
        <tr>
            <th>Id do Livro</th>
            <!--Irei tirar depois é só pra testes-->
            <th>Data de Empréstimo do Livro</th>
            <th>Data de Devolução à Biblioteca</th>
            <th>Quer devolver o livro?</th>
        </tr>

        @foreach ($loans as $item)
            <tr>
                <td>{{ $item->id }} </td>
                <td>{{ $item->date_start}} </td>
                <td>{{ $item->date_end }} </td>
                <td> <a href="{{ url('add-to-loan/'.$item->id) }}">Devolver Livro</a> </td>
            </tr>
        @endforeach
</section>
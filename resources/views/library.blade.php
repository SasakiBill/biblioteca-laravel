
@extends('app')


<section class="library-init position-fixed"  style="margin-top: 0vw;" >
    <div class="container" >
        <h1>Livros Disponíveis</h1>
        <div class="card mb-4 mt-5 bg-transparent">
            <div class="card-body ">
                <table class="table table-dark" style="text-align: center">
                    <thead class="thead-dark">
                    <caption>Tabelas de livros disponíveis até o momento<caption>
                            <th>Nome do Livro</th>
                            <th>Descrição</th>
                            <th>Autor</th>
                            <th>Categoria</th>
                            <th>Disponibilidade</th>
                            <th>Quer emprestar o livro?</th>
                    </thead>
                    @foreach ($books as $item)
                        <tr>
                            <td>{{ $item->name }} </td>
                            <td>{{ $item->description}} </td>
                            <td>{{ $item->author }} </td>
                            <td>{{ $item->category}} </td>
                            <td>{{ $item->book_status }}</td>
                            <td> <a href="{{ url('add-to-loan/'.$item->id) }}">Emprestar livro</a> </td>
                        </tr>
                @endforeach

                </table>
            </div>
        </div>
    </div>
</section>

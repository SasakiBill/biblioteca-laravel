
@extends('app')


<section class="library-init position-fixed"  style="margin-top: 0vw;" >
    <div class="container" >
        <h1>Livros Disponíveis</h1>
        <div class="table-responsive" style="margin-top: 2vw; float: right;">
            <table class="table table-bordered border-dark table-hover table-striped" style="text-align: center">
                <thead class="table-dark">
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
                </div>
            </table>
        </div>
    </div>
</section>
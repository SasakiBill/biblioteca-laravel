
{{-- @extends('layouts.topnavuser') --}}
@extends('layouts.bootstraptopnav')
@extends('layouts.bootstrapfooter')
{{-- @extends('layouts.footeruser') --}}


<section class="library-init"  style="margin-top: -4vw;" >
    <div class="container">
        <br><br>
        <h1>Livros Disponíveis</h1>
        <table class="table table-dark"">
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
                    <td> <a href="{{ url('add-to-loan/'.$item->id) }}">Emprestar livro</a> </td>
                </tr>
            @endforeach
   
            </div>
        </table>
    </div>
</section>
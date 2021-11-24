
{{-- @extends('layouts.topnavuser') --}}
@extends('layouts.bootstraptopnav')
@extends('layouts.bootstrapfooter')
{{-- @extends('layouts.footeruser') --}}


<section class="library-init position-fixed"  style="margin-top: 0vw;" >
    <div class="container" >
        <h1>Livros Disponíveis</h1>
        <div class="table-responsive" style="margin-top: 2vw; float: right;">
            <table class="table table-bordered border-dark table-hover table-striped" style="text-align: center">
                <thead class="table-dark">
                    <caption>Tabelas de livros remprestados até o momento<caption>
                    <th>ID do Livro</th>
                    <th>Nome do Livro</th>
                    <th>Descrição</th>
                    <th>Autor do Livro</th>
                    <th>Categoria</th>
                    <th>Tempo de Devolução</th>
                </thead>
                @if(session('loan'))
                    @foreach(session('loan') as $id => $loans)
                        <tr>
                            <td>{{ $loans['id'] }}</td>
                            <td>{{ $loans['name'] }}</td>
                            <td>{{ $loans['description'] }}</td>
                            <td>{{ $loans['author'] }} </td>
                            <td>{{ $loans['category' ] }} </td>
                        </tr>
                    @endforeach
                @endif
                </div>
            </table>
        </div>
    </div>
</section>
@extends('layouts.topnavuser')
<section class="section-init">
    <h1>Meus Empréstimos Atuais</h1>
    @if (session('loan'))
        @foreach (session('loan') as $id => $infoLivro)
            <tr>
                <td data-th="loan">
                    <div class="row">
                        <div class="col-sm-9">
                            <h3>{{ $infoLivro['name'] }}</h3>
                        </div>
                    </div>
                </td>
            </tr>

            
        @endforeach
    @endif
</section>
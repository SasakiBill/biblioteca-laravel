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
                <td> <a href="{{ url('add-to-loan/'.$item->id) }}">Emprestar livro</a> </td>
            </tr>
        @endforeach

        @section('scripts')


        <script type="text/javascript">
        // this function is for update card
            $(".update-cart").click(function (e) {
                e.preventDefault();
                var ele = $(this);
                    $.ajax({
                    url: '{{ url('update-cart') }}',
                    method: "patch",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
                    success: function (response) {
                        window.location.reload();
                    }
                    });
                });
            $(".remove-from-cart").click(function (e) {
                e.preventDefault();
                var ele = $(this);
                if(confirm("Are you sure")) {
                    $.ajax({
                        url: '{{ url('remove-from-cart') }}',
                        method: "DELETE",
                        data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                        success: function (response) {
                            window.location.reload();
                                
                        }
                    });
                }
            });
        </script>
        
        @endsection
        </div>
    </table>
</section>
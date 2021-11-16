@extends('layouts.topnavuser')

<section class="libray-init">
    <br><br>
    <h1>Livros Disponíveis</h1>
    <table border="1">
        @foreach ($books as $item)
            <tr>
                <td>{{ $item->id }} </td>
                <td>{{ $item->name }} </td>
                <td>{{ $item->description}} </td>
                <td>{{ $item->author }} </td>
            </tr>
        @endforeach
    </table>
</section>
{{-- @extends('layouts.topnavuser') --}}
@extends('app')
{{-- @extends('layouts.footeruser') --}}

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Usuários</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item">
                        <a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Usuários</li>
                </ol>

                <div class="row">

                    <div class="col-3">
                        <a href="{{ route('users.create') }}"
                           class="btn btn-dark btn-block text-white">
                            Cadastrar Novo Usuário
                        </a>
                    </div>

                    <div class="card mb-4 mt-5  bg-transparent">
                        <div class="card-body shadow-none">
                            <table class="table">
                                <thead class="thead-dark bg-dark text-white">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Telefone</th>
                                    <th scope="col">Criado em</th>
                                    <th scope="col">Editado em</th>
                                    <th scope="col" class="text-center">Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <th scope="row">{{ $user['id'] }}</th>
                                        <td>{{ $user['name'] }}</td>
                                        <td>{{ $user['email'] }}</td>
                                        <td>{{ $user['phone'] }}</td>
                                        <td>{{ $user['created_at'] }}</td>
                                        <td>{{ $user['updated_at'] }}</td>
                                        <td class="text-center">
                                            <a href="{{ $user['links']['show'] }}"
                                               type="button"
                                               class="btn btn-dark text-white">
                                                Show
                                            </a>

                                            <a href="{{ $user['links']['edit'] }}"
                                               type="button"
                                               class="btn btn-warning text-white">
                                                Edit
                                            </a>

                                            <a href="{{ $user['links']['destroy'] }}"
                                               type="button"
                                               class="btn btn-danger text-white">
                                                Destroy
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection

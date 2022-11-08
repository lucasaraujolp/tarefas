@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 container-main">
            <div class="card">
                <div class="card-header">{{ __('Lista de Tarefas') }}</div>

                <div class="card-body btn-cadastrar">
                    @guest
                        <a class="btn btn-warning" href="{{ route('login') }}" role="button">Cadastrar</a>
                    @else
                        <a class="btn btn-primary" href="{{ url('cadastrar') }}" role="button">Cadastrar</a>
                    @endguest
                </div>

                <div class="table-contain">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tarefa</th>
                                <th scope="col">Data Inicial</th>
                                <th scope="col">Data Final</th>
                                <th scope="col">Criado Por</th>
                                <th scope="col">Editado Por</th>
                                <th scope="col">Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if( $tarefas->count() == 0 )
                                @guest
                                    <tr>
                                        <td colspan="7">
                                            <a class="btn btn-warning w-100" href="{{ route('login') }}" role="button">Não há tarefas, cadastre novas!</a>
                                        </td>
                                    </tr>
                                @else
                                    <tr>
                                        <td colspan="7">
                                            <a class="btn btn-primary w-100" href="{{ url('cadastrar') }}" role="button">Não há tarefas, cadastre novas!</a>
                                        </td>
                                    </tr>
                                @endguest
                            @else
                                @foreach( $tarefas as $t )
                                    <tr>
                                        <th scope="row">{{ $t->id }}</th>
                                        <td>{{ $t->tarefa }}</td>
                                        <td>{{ \Carbon\Carbon::parse($t->data_inicial)->format('d/m/Y')}}</td>
                                        <td>{{ \Carbon\Carbon::parse($t->data_final)->format('d/m/Y')}}</td>
                                        <td>{{ $t->criador }}</td>
                                        <td>{{ $t->editado }}</td>
                                        <td class="d-flex justify-content-around">
                                            @guest
                                                <a href="{{ route('login') }}" class="btn btn-warning">Editar</a>
                                                <a href="{{ route('login') }}" class="btn btn-warning">Excluir</a>
                                            @else
                                                <a href="{{$t->id}}/editar" class="btn btn-primary">Editar</a>
                                                <form action="crud/delete/{{ $t->id }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger">Excluir</button>
                                                </form>
                                            @endguest
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection

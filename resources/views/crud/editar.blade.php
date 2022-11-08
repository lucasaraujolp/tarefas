@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar Tarefa') }} {{$tarefa->id}}</div>

                <div class="card-body">
                    @if( Request::is('*/editar') )
                        <form method="POST" action="{{ url('crud/update') }}/{{ $tarefa->id }}">
                            @csrf

                            <div class="form-group row">
                                <label for="tarefa" class="col-md-4 col-form-label text-md-right">{{ __('Nome da Tarefa') }}</label>

                                <div class="col-md-6">
                                    <input id="tarefa" type="text" class="form-controlr" name="tarefa" required autocomplete="tarefa" value="{{ $tarefa->tarefa }}" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="data_inicial" class="col-md-4 col-form-label text-md-right">{{ __('Data Inicial') }}</label>

                                <div class="col-md-6">
                                    <input id="data_inicial" type="date" class="form-control" name="data_inicial" required value="{{ $tarefa->data_inicial }}" autocomplete="data_inicial">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="data_final" class="col-md-4 col-form-label text-md-right">{{ __('Data Final') }}</label>

                                <div class="col-md-6">
                                    <input id="data_final" type="date" class="form-control" name="data_final" value="{{ $tarefa->data_final }}" required autocomplete="data_inicial">
                                </div>
                            </div>

                            <div class="d-none">
                                <input id="editado" type="text" class="form-control" name="editado" required value="{{ Auth::user()->name }}">
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Editar') }}
                                    </button>
                                    <a href="{{ url('/') }}" class="btn btn-secundary">
                                        {{ __('Voltar') }}
                                    </a>
                                </div>
                            </div>
                        </form>
                    @else
                        <a href="{{ url('/') }}" class="btn w-100 btn-danger">
                            {{ __('Nenhum usuário encontrado, volte a página inicial') }}
                        </a>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

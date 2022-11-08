@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cadastrar Nova Tarefa') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('crud/add') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="tarefa" class="col-md-4 col-form-label text-md-right">{{ __('Nome da Tarefa') }}</label>

                            <div class="col-md-6">
                                <input id="tarefa" type="text" class="form-controlr" name="tarefa" required autocomplete="tarefa" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="data_inicial" class="col-md-4 col-form-label text-md-right">{{ __('Data Inicial') }}</label>

                            <div class="col-md-6">
                                <input id="data_inicial" type="date" class="form-control" name="data_inicial" required autocomplete="data_inicial">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="data_final" class="col-md-4 col-form-label text-md-right">{{ __('Data Final') }}</label>

                            <div class="col-md-6">
                                <input id="data_final" type="date" class="form-control" name="data_final" required autocomplete="data_inicial">
                            </div>
                        </div>

                        <div class="d-none">
                            <input id="criador" type="text" class="form-control" name="criador" required value="{{ Auth::user()->name }}">
                            <input id="editado" type="text" class="form-control" name="editado" required value="*** ***">
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Cadastrar') }}
                                </button>
                                <a href="{{ url('/') }}" class="btn btn-secundary">
                                    {{ __('Voltar') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adicionar Tarefa <a href="{{ route('tarefa.index') }}">Listar Tarefas</a></div>

                <div class="card-body">
                    <form action="{{ route('tarefa.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Tarefa</label>
                            <input type="text" class="form-control" name="tarefa">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Dara Limite Conclusão</label>
                            <input type="date" class="form-control" name="data_limite_conclusao">
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

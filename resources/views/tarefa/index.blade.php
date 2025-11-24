@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            Tarefas
                        </div>
                        <div class="col-6 text-end">
                            <a href="{{ route('tarefa.create') }}">Nova Tarefa</a>
                            <a href="{{ route('tarefa.exportacao', ['extensao' => 'xlsx']) }}">Exportação XLSX</a>
                            <a href="{{ route('tarefa.exportacao', ['extensao' => 'csv']) }}">Exportação CSV</a>
                            <a href="{{ route('tarefa.exportacao', ['extensao' => 'pdf']) }}">Exportação Pdf</a>
                            <a href="{{ route('tarefa.exportar')}}" target="_blank">Exportação Pdf V2</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tarefa</th>
                        <th scope="col">Dara Limite Conclusão</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listTarefas as $tarefa)
                        <tr>
                        <th scope="row">{{ $tarefa->id }}</th>
                            <td>{{ $tarefa->tarefa }}</td>
                            <td>{{ date('d/m/y', strtotime($tarefa->data_limite_conclusao)) }}</td>
                            <td><a href="{{ route('tarefa.edit', $tarefa) }}">Editar</a></td>
                            <td>
                                <form id="form_{{ $tarefa->id }}" action="{{ route('tarefa.destroy', $tarefa->id) }}" method="post">
                                @method('DELETE')
                                @csrf
                                </form>
                                <a href="#" onclick="document.getElementById('form_{{ $tarefa->id }}').submit()">Excluir</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="{{ $listTarefas->previousPageUrl() }}">Previous</a></li>
                        @for ($i = 1 ; $i <= $listTarefas->lastPage(); $i++)
                            <li class="page-item {{ $listTarefas->currentPage() == $i ? 'active' : '' }}">
                                <a class="page-link" href="{{ $listTarefas->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor
                        <li class="page-item"><a class="page-link" href="{{ $listTarefas->nextPageUrl() }}">Next</a></li>
                    </ul>
                    </nav>
                    <a class="btn btn-primary" role="button" href="{{ route('tarefa.create') }}">Cadastrar Tarefa</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

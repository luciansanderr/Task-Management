<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <style>
            .page-break {
                page-break-after: always;
            }

            .titulo {
                border: 1px;
                text-align: center;
                margin-bottom: 20px;
                background-color: #c2c2c2;
                width: 100%;
                text-transform: uppercase;
                font-weight: bold;
                padding: 10px 0;
            }

            .tabela {
                width: 100%;
                border-collapse: collapse;
            }

            .tablea th, .tabela td {
                border: 1px solid black;
                padding: 8px;
                text-align: left;
            }
        </style>
    </head>

    <body>
        <div class="titulo">Lista de Tarefas</div>
            <table class="tabela">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tarefa</th>
                        <th>Data Limite Conclusão</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tarefas as $tarefa)
                    <tr>
                        <td>{{ $tarefa->id }}</td>
                        <td>{{ $tarefa->tarefa }}</td>
                        <td>{{ date('d/m/y', strtotime($tarefa->data_limite_conclusao)) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="page-break">
                <h1>Página 2</h1>
            </div>


            <div class="page-break">
                <h1>Página 3</h1>
            </div>
    </body>
</html>

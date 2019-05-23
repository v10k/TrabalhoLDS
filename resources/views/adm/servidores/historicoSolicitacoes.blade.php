@extends('layout.site')

@section('titulo', 'Lista Servidores')

@section('conteudo')

<link href="{{asset('css/app.css')}}" rel="stylesheet" />
<link href="{{asset('css/lista.css')}}" rel="stylesheet" />
</head>
    <body>
        <div class="content">
            <div class="tabela">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="text-center">Histórico de aprovações de salas</h3>
                    </div>
                </div>
                
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Sala</th>
                            <th scope="col">Professor</th>
                            <th scope="col">Data</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Aprovação</th>
                        </tr>
                    </thead>
                    <!-- foreach -->
                    <tr scope="row">
                        <td>id</td>
                        <td>xxx</td>
                        <td>nome</td>
                        <td>xxx</td>
                        <td>xxx</td>
                        <td>xxx</td> <!-- aprovada ou reprovada -->
                    </tr>
                    <!-- fim foreach -->
                </table>
            </div>
        </div>
@endsection
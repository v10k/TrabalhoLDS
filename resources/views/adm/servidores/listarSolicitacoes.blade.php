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
                        <h3 class="text-center">Lista de Salas Solicitadas para aprovação</h3>
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
                            <th scope="col">Aprovar</th>
                            <th scope="col">Reprovar</th>
                        </tr>
                    </thead>
                    <!-- foreach -->
                    <tr scope="row">
                        <td>id</td>
                        <td>xxx</td>
                        <td>nome</td>
                        <td>xxx</td>
                        <td>xxx</td>
                        <td><a class="btn btn-warning" href="">Aprovar</a></td>
                        <td><a class="btn btn-danger" href="">Reprovar</a></td>
                    </tr>
                    <!-- fim foreach -->
                </table>
            </div>
        </div>
@endsection
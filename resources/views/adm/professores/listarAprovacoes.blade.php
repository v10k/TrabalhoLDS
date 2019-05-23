@extends('layout.site')

@section('titulo', 'Lista salas Solicitadas')

@section('conteudo')
<link href="{{asset('css/app.css')}}" rel="stylesheet" />
<link href="{{asset('css/lista.css')}}" rel="stylesheet" />
</head>
    <body>
        <div class="content">
            <div class="tabela">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="text-center">Listagem de Salas Solicitadas</h3>
                    </div>
                    <div class="col-md-2 pull-right">
                        <!-- <form method="get" action=""> -->
                            <button type="submit" class="btn btn-light-blue btn-new">Solicitar nova sala</button>
                        <!-- </form> -->
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Sala</th>
                            <th scope="col">Data</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Aprovado</th>
                        </tr>
                    </thead>
                    <!-- foreach -->
                    <tr scope="row">
                        <td>01</td>
                        <td>xxx</td>
                        <td>xxx</td>
                        <td>xxx</td>
                        <td>xxx</td>
                    </tr>
                    <!-- final foreach -->
                </table>
            </div>
        </div>
@endsection
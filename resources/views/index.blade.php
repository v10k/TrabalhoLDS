@extends('layout.site')

@section('titulo', 'Formulario disciplinas')

@section('conteudo')
<link href="{{asset('css/usuario.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <h3> HOME PAGE </h3>
    @if (session('erro'))
        <div class="alert alert-danger" role="alert">
            <h2> Você não tem acesso a essa página ! </h2>
        </div>
    @endif
@endsection
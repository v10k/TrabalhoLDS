@extends('layout.site')

@section('titulo', 'Formulario servidores')

@section('conteudo')
    <h3> Servidores </h3>
    <form method="POST" action="">
    <input type="text" placeholder="Prontuário do servidor"/><br/>
    <input type="text" placeholder="Nome do servidor"/><br/> 
    <input type="email" placeholder="Email do servidor"/><br/> <br/>
    <button type="submit" value="salvar"> Salvar </button>
    </form>
@endsection
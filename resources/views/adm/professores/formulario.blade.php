@extends('layout.site')

@section('titulo', 'Formulario professores')

@section('conteudo')
    <h3> Professores </h3>
    <form method="POST" action="">
    <input type="text" placeholder="Prontuário do professor"/><br/>
    <input type="text" placeholder="Nome do professor"/><br/> 
    <input type="email" placeholder="Email do professor"/><br/> <br/>
    <button type="submit" value="salvar"> Salvar </button>
    </form>
@endsection
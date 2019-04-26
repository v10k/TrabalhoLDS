@extends('layout.site')

@section('titulo', 'Formulario disciplinas')

@section('conteudo')
    <h3> Disciplinas </h3>
    <form method="POST" action="">
    <input type="text" placeholder="Nome da disciplina"/><br/>
    <input type="text" placeholder="Curso que pertence"/><br/>   <!-- MUDAR PARA SELECT OU ALGO PARECIDO -->
    <input type="number" placeholder="Carga horária"/><br/><br/> <!-- TALVEZ UM SELECT COM HORÁRIOS DEFINIDOS... -->
    <button type="submit" value="salvar"> Salvar </button>
    </form>
@endsection
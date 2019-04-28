@extends('layout.site')

@section('titulo', 'Formulario disciplinas')

@section('conteudo')
    <h3> Disciplinas </h3>
    <form method="POST" action="{{ $caminho }}">
    {{ csrf_field() }}
    <input type="text" placeholder="Nome da disciplina" value="{{ isset($disciplinas->nome)  ? $disciplinas->nome  : '' }}" /><br/>
    <input type="text" placeholder="Curso que pertence" value="{{ isset($disciplinas->curso) ? $disciplinas->curso : '' }}" /><br/>   <!-- MUDAR PARA SELECT OU ALGO PARECIDO -->
    <input type="number" placeholder="Carga horária"    value="{{ isset($disciplinas->carga) ? $disciplinas->carga : '' }}" /><br/><br/> <!-- TALVEZ UM SELECT COM HORÁRIOS DEFINIDOS... -->
    <button type="submit" value="salvar"> Salvar </button>
    </form>
@endsection
@extends('layout.site')

@section('titulo', 'Formulario espaços')

@section('conteudo')
    <h3> Espaços </h3>
    <form method="POST" action="">
    <input type="text" placeholder="Nome do espaço"/><br/>
    <input type="number" placeholder="Capacidade de Lotação"/><br/> <br/>
    <label for="descricao_do_espaco"> Descrição do espaço </label><br/><br/>
    <textarea name="descricao_do_espaco" rows="4" cols="50" placeholder="Descrição do espaço aqui..."> </textarea><br/><br/>
    <button type="submit" value="salvar"> Salvar </button>
    </form>
@endsection
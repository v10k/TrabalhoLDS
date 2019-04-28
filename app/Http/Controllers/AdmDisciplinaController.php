<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmDisciplinaController extends Controller
{
    public function formularioAdicionar() {
        $caminho = route('adm.adicionaDisciplina');
        return view('adm.disciplinas.formulario', compact('caminho'));
    }

    public function formularioAtualizar($id) {
        $disciplinas = Disciplina::find($id);
        $caminho = route('adm.atualizaDisciplina', $id);
        return view('adm.disciplinas.formulario', compact('caminho', 'disciplinas'));
    }

    public function adicionar() {

    }

    public function atualizar(Request $req, $id) {
        $disciplinas = find($id)->update();
        return redirect()->route('adm.listaDisciplina');
    }

    public function listar() {

    }

    public function deletar() {
        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdmProfessorController extends Controller
{

    public function validations(Request $req)
    {
        $rules = [
            "prontuario" => "required|min:2|max:20|unique:users",
            "nome" => "required|min:3|max:200",
            "email" => "required|email|unique:users",
            "senha" => "required|min:3|max:20",
        ];

        $messages = [
            "required" => "Campo obrigatório",
            "prontuario.unique" => "Prontuário em uso.",
            "nome.min" => "O minimo de caracteres é 3.",
            "nome.max" => "O máximo de caracteres é 200.",
            "prontuario.min" => "O minimo de caracteres é 3.",
            "prontuario.max" => "O máximo de caracteres é 20.",
            "email.email" => "Email inválido.",
            "email.unique" => "Email em uso.",
            "senha.min" => "Minimo de caracteres é 3",
            "senha.min" => "Maximo de caracteres permitidos é 20"
        ];

        $req->validate($rules, $messages);
    }

    public function addForm()
    {
        $caminho = route('adm.adicionaProfessor');
        return view('adm.professores.formulario', compact('caminho'));
    }

    public function updateForm($id)
    {
        $professores = User::find($id);
        $caminho = route('adm.atualizaProfessor', $id);
        return view('adm.professores.formulario', compact('caminho', 'professores'));
    }

    public function insert(Request $req) {
        
        $this->validations($req);

        $dados = $req->all();
        User::create($dados);

        return redirect()->route('adm.listaProfessor');
    }

    public function update(Request $req, $id)
    {
        $this->validations($req);
        $dados = $req->all();
        User::find($id)->update($dados);

        return redirect()->route('adm.listaProfessor');
    }

    public function selectAll()
    {
        $registros = User::all()->where('tipo', 'professor');
        return view('adm.professores.listar', compact('registros'));
    }

    public function delete($id)
    {
        User::find($id)->delete();
        return redirect()->route('adm.listaProfessor');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Validacao extends Controller {
    
    private $requisitos;
    private $mensagens;
    
    public function valida(Request $req) {
        $req->validate($this->requisitos, $this->mensagens);
    }

    public function validaInsereUsuario(Request $req) {
        $this->requisitosInsereUsuario();
        $this->mensagensValidaUsuario();
        $this->valida($req);
    }

    public function validaAtualizaUsuario(Request $req) {
        $this->requisitosAtualizaUsuario();
        $this->mensagensValidaUsuario();
        $this->valida($req);
    }

    private function requisitosInsereUsuario() {
        $this->requisitos = [
            "nome" => "required|min:3|max:200",
            "email" => "required|email|unique:users",
            "prontuario" => "required|min:3|max:20|unique:users",
        ];
    }

    private function requisitosAtualizaUsuario() {
        $this->requisitos = [
            "nome" => "required|min:3|max:200",
            "email" => "required|email",
            "prontuario" => "required|min:3|max:20",
        ];
    }

    private function mensagensValidaUsuario() {
        $this->mensagens = [
            "required" => "Este campo é obrigatório",
            "email.email" => "Email inválido",
            "email.unique" => "Email em uso",
            "nome.min" => "Mínimo de caracteres é 3",
            "nome.max" => "Máximo de caracteres é 200",
            "prontuario.min" => "Mínimo de caracteres é 3",
            "prontuario.max" => "Máximo de caracteres permitidos é 20",
            "prontuario.unique" => "O prontuário já existe",
        ];
    }

    
}

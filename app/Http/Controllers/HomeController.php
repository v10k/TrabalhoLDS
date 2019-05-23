<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class HomeController extends Controller
{
    public function index() {
       return view('index');
    }

    public function login() {
        if ($this->isLogged()) {
            return view('index');
        }
        $caminho = route('site.verificarLogin');
        return view('login', compact('caminho'));
    }

    public function signIn(Request $req) {
        if ($this->isLogged()) {
            return view('index');
        }
        $req->validate([
            'prontuario' => 'required',
            'senha' => 'required'
        ], [
            'required' => 'Campo vazio'
        ]);

        $usuario = User::where([
            ['prontuario', '=', $req->prontuario],
            ['senha', '=',      $req->senha]
        ])->first();

        if (empty($usuario)) {
            $loginError = 'Login ou senha inválidos.';
            return view('login', [
                'message' => $loginError,
                'caminho' => route('site.verificarLogin')
                ]);
        }

      Auth::login($usuario);
     
      return redirect()->route($this->verificaUsuario($usuario->tipo));
    }

    private function verificaUsuario($tipo) {
        if ($tipo == 'servidor') {
            return 'adm.listaServidor';
        } else if ($tipo == 'administrador') {
            return 'adm.index';
        } else {
            return 'adm.listaProfessor';
        }
    }

    private function isLogged() {
        if (Auth::check()) {
            return true;
        }
        return false;
    }
    
}
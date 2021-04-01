<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
class CadastroController extends Controller
{


    public function cadastroForm(){
        return view ('cadastro');
    }
    public function menuForm(){
        return view ('menu');
    }
    public function cadastradoForm(Request $request){
        $usuario = new Usuario();
        $usuario->nome = $request->nome;
        $usuario->data_nascimento = $request->data_nascimento;
        $usuario->senha = $request->senha;
        $usuario->matricula = $request->matricula;
        $usuario->save();
        return view('usuarioCadastrado', compact('usuario'));
    }
    public function listaForm(){
        $usuarios = Usuario::all();
       
        return view ('lista', compact('usuarios'));
    }
    






}

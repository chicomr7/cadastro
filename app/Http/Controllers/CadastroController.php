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
    public function editarUsuario($id){
        $usuario = Usuario::where('id', $id)->first();
        return view ('editar', compact('usuario'));
    }
    public function salvarEdicao(Request $request){
        $usuario = Usuario::where('id', $request->id)->first();
        $usuario->nome = $request->nome;
        $usuario->data_nascimento = $request->data_nascimento;
        $usuario->senha = $request->senha;
        $usuario->matricula = $request->matricula;
        $usuario->update();
       return redirect (route ('listaForm'));
    }
    public function deletarUsuario($id){
        Usuario::destroy($id);
        return redirect (route ('listaForm'));
    }


    public function cadastroEnd(){
       return view ('cadastrar_end');
    }
public function cadastrarEnd(Request $request){
        $endereco = new Endereco();
        $endereco->nome = $request->nome;
        $endereco->data_nascimento = $request->data_nascimento;
        $endereco->senha = $request->senha;
        $endereco->matricula = $request->matricula;
        $endereco->save();
        return view('usuarioCadastrado', compact('endereco'));
    }





}

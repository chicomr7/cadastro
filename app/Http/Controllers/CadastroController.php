<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Endereco;
class CadastroController extends Controller
{

    public function menuForm(){
        return view ('menu');
    }
    public function cadastroForm(){
        return view ('cadastro');
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
        $endereco->CEPusuario = $request->CEPusuario;
        $endereco->logadouroUsuario = $request->logadouroUsuario;
        $endereco->NcasaUsuario = $request->NcasaUsuario;
        $endereco->complementoUsuario = $request->complementoUsuario;
        $endereco->bairroUsuario = $request->bairroUsuario;
        $endereco->cidadeUsuario = $request->cidadeUsuario;
        $endereco->estadoUsuario = $request->estadoUsuario;
        $endereco->save();
        return view('enderecoCadastrado', compact('endereco'));
    }
    public function listaEnd(){
        $enderecos = Endereco::all();
       
        return view ('listaEndereco', compact('enderecos'));
    }

    public function editar_Endereco($id){
    $endereco = Endereco::where('id', $id)->first();
    return view ('editarEndereco', compact('endereco'));  
    }

 public function salvarEdicaoEndereco(Request $request){
        $endereco = Endereco::where('id', $request->id)->first();
        $endereco->CEPusuario = $request->CEPusuario;
        $endereco->logadouroUsuario = $request->logadouroUsuario;
        $endereco->NcasaUsuario = $request->NcasaUsuario;
        $endereco->complementoUsuario = $request->complementoUsuario;
        $endereco->bairroUsuario = $request->bairroUsuario;
        $endereco->cidadeUsuario = $request->cidadeUsuario;
        $endereco->estadoUsuario = $request->estadoUsuario;
        $endereco->update();
       return redirect (route ('lista_endereco'));
    }

    public function deletarEndereco($id){
        Endereco::destroy($id);
        return redirect (route ('lista_endereco'));
    }


}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{


    public function cadastroForm(){
        return view ('cadastro');
    }
    public function menuForm(){
        return view ('menu');
    }
    public function listaForm(){
        return view ('lista');
    }
    public function cadastradoForm(){
        return view ('usuarioCadastrado');
    }





}

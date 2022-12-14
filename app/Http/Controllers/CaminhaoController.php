<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Caminhao;

class CaminhaoController extends Controller
{
    public function FormularioCadastro(){
        return view('cadastrarCaminhao');
    }

    public function Editar(){
        return view('editarCaminhao');
    }

    public function SalvarBanco(Request $request){
        $dadosCaminhao = $request->validate([
            'modelo' => 'string|Required',
            'marca' => 'string|Required',
            'ano' => 'string|Required',
            'cor' => 'string|Required',
            'valor' => 'string|required',
        
        ]);
            
    
        Caminhao::create($dadosCaminhao);

        return Redirect::route('home');
    
    
    }

        
   
}



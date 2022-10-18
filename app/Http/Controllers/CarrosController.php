<?php

namespace App\Http\Controllers;
use Iluminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use app\Models\carro;
class CarrosController extends Controller
{
 
    public function FormularioCadastro(){
        return view('cadastrarCarro');
    }

    public function Editar(){
        return view('editarCarro');
    }

    public function SalvarBanco(Request $request){
        $dadosCarro = $request->validate([
            'modelo' => 'string|Required',
            'marca' => 'string|Required',
            'ano' => 'string|Required',
            'cor' => 'string|Required',
            'valor' => 'string|required',
        
        ]);
            
    
        Carro::create($dadosCarro);

        return Redirect::route('home');
    
    
    }

        
   
}


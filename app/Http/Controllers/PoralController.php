<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoralController extends Controller
{
    //
    public function index (){
    	return view('entrada');

    }
    public function listarEquipa(Request $request){
    	$teams = [
    		'Desportivo das Aves',
    		'Moreirense',
    		'Famalicão'
    	];
    if(is_numeric($request->chave)&& $request->chave>=0 && $request->chave<count($teams)) {
        //obter o nome da equipa pretendida através do ID
        $equipa = $teams[$request->chave];
    }
        else{
            $equipa = "Não foi possivel obter a info pretendida";
        }
    	return view('listar-equipas' ['equipa'=>$equipa]);
    }

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Passageiros;

class PassageirosController extends Controller
{
    function incluir(Request $request){
        //RECEPCIONAR DADOS VINDOS DA VIEW
        $dadosFormulario = $request->all();
        //VALIDAÇÃO

        //INCLUIR NO DB
        $passageiroInserido = Passageiros::create($dadosFormulario);
        //EXIBE ID INSERIDO NO BANCO
        //echo $passageiroInserido->id;

        return redirect('/passageiros/incluir')->with('mensagem', 'Passageiro incluido com sucesso! ')
            ->with('id', $passageiroInserido->id);
    }
}

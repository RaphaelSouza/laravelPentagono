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

    function listar(){
        $dados = Passageiros::all();
        return view('passageiros.listar', compact('dados')); //DADOS será enviado à view, para listagem das linhas
        //LEMBRETE: passageiros.listar = passageiros -> nome da pasta dentro da pasta view, listar -> arquivo PHP propriamente da view.
    }

    function deletar($id){
        //LOCALIZA O REGISTRO
        $passageiro = Passageiros::find($id);
        //REMOVE O REGISTRO
        $passageiro->delete();
        return redirect('/passageiros/listar');
    }
}

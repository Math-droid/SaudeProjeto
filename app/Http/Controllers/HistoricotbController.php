<?php

namespace App\Http\Controllers;

use Illuminate\support\facades\redirect;
use Illuminate\Http\Request;
use App\Models\historicotb;

class HistoricotbController extends Controller
{
    public function index(){
        return view('Home');
    }

    public function showFormHistorico(){
        return view('TelaCadastro');
    }

    public function storeHistorico(Request $request){
        $historico= $request->validate([
            'xxx'=>'string|required',
            'xxx'=>'string|required',
            'xxx'=>'string|required'
        ]);

        historico::create($historico);
        return redirect::route('index');
    }


    public function showGerenciador(Request $request){
       $dados= historico::query();
       $dados->when($request->nome,function($query,$nome){
        $query->where('nomeFK', 'like' , '%'.$nome.'%');
       });

       $dadoshistorico = $dadoshistorico->get();

       return view('Hitórico', ['historicotb' => $dadoshistorico]);
    }


    public function destroy(historico $id){
        $id->delete();
        return redirect::route('xxx');
        
    }


    public function update(historico $id, Request $request){
        $historico = $request->validate([
            'xxx'=>'string|required',
            'xxx'=>'string|required',
            'xxx'=>'string|required'
        ]);

        $id->fill($historico);
        $id->save();
        return redirect::route('xxx');
    }


    public function show(historico $id){
        return view('xxx', ['historicotb'=> $id]);
    }
}
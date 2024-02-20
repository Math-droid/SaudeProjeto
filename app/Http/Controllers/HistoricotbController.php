<?php

namespace App\Http\Controllers;

use Illuminate\support\facades\redirect;
use Illuminate\Http\Request;
use App\Models\historicotb;

class HistoricotbController extends Controller
{
    public function index(){
        return view('index');
    }

    public function showFormHistorico(){
        return view('cadastrar');
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
       $dados->when($request->xxx,function($query,$nome){
        $query->where('xxx', 'like' , '%'.$nome.'%');
       });

       $dadoshistorico = $dadoshistorico->get();

       return view('xxx', ['historicotb' => $dadoshistorico]);
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
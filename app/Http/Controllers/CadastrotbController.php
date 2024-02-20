<?php

namespace App\Http\Controllers;

use Illuminate\support\facades\redirect;
use Illuminate\Http\Request;
use App\Models\cadastrotb;

class CadastrotbController extends Controller
{
    public function index(){
        return view('index');
    }

    public function showFormCadastro(){
        return view('cadastrar');
    }

    public function storecadastro(Request $request){
        $cadastro= $request->validate([
            'xxx'=>'string|required',
            'xxx'=>'string|required',
            'xxx'=>'string|required'
        ]);

        cadastro::create($cadastro);
        return redirect::route('index');
    }


    public function showHistorico(Request $request){
       $dados= cadastro::query();
       $dados->when($request->xxx,function($query,$nome){
        $query->where('xxx', 'like' , '%'.$nome.'%');
       });

       $dadoscadastro = $dadoscadastro->get();

       return view('xxx', ['cadastrotb' => $dadoscadastro]);
    }


    public function destroy(cadastro $id){
        $id->delete();
        return redirect::route('xxx');
        
    }


    public function update(cadastro $id, Request $request){
        $cadastro = $request->validate([
            'xxx'=>'string|required',
            'xxx'=>'string|required',
            'xxx'=>'string|required'
        ]);

        $id->fill($cadastro);
        $id->save();
        return redirect::route('xxx');
    }


    public function show(cadastro $id){
        return view('xxx', ['cadastrotb'=> $id]);
    }
}
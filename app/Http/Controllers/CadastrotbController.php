<?php

namespace App\Http\Controllers;

use Illuminate\support\facades\redirect;
use Illuminate\Http\Request;
use App\Models\cadastrotb;
use Illuminate\Support\Facades\Hash;

class CadastrotbController extends Controller
{
    public function showFormCadastro(){
        return view('Telacadastro');
    }

    public function storecadastro(Request $request){
        $cadastro= $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'senha' => 'required|string|min:8|confirmed',
        ]);

            cadastrotb::create([
        'nome' => $cadastro['nome'],
        'email' => $cadastro['email'],
        'senha' => bcrypt($cadastro['senha']),
            ]);
        return redirect::route('Index');
    }



    public function show(cadastrotb $id){
        return view('EditarConta', ['cadastrotb'=> $id]);
    }
}
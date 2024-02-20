<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\CadastrotbController;

 // --rotas cadastroController
Route::get('/',[CadastrotbController::class,'index'])->name('Home');

Route::get('/Cadastro',[CadastrotbController::class,'showFormCadastro'])->name('formulario-cadastro');

Route::post('/Cadastro',[CadastrotbController::class,'storecadastro'])->name('cadastrar-user');

Route::get('/Editar/{id}',[CadastrotbController::class,'show'])->name('Editar-agencia');
Route::put('/EditarAgencia/{id}',[CadastrotbController::class,'update'])->name('EditarBanco-agencia');


// -- rotas logincontroller



// -- rotas historicocontroller


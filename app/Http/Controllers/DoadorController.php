<?php

namespace App\Http\Controllers;

use App\Models\Doador;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Disponabilidade;

class DoadorController extends Controller
{
    public function index()
    {
        return view('doador.index');
    }

    public function create(Request $request) {
        $users = User::all();
        return view('doador.create', ['users'=> $users]);
    }

    public function store(Request $request) {
        $doador = new Doador();
        $doador->cpf= $request->input('cpf');
        $doador->atuacao = $request->input('atuacao');
        $doador->users_id = Auth::id(); // Obtém o ID do usuário autenticado
        $doador->save();
        return redirect()->route('disponabilidade.create');
    }
    
    

    public function edit(Request $request, $id) {
        $doador = Doador::findOrFail($id);
        return view('doador.edit', ['doador' => $doador]);
    }

    public function update(Request $request, $id) {
        $doador = Doador::findOrFail($id);
        $obj->Doador_iddoador=$request->Doador_iddoador;
        $obj->cnpj = $request->cnpj;
        $obj->atuacao= $request->atuacao;
        $doador->save();
    
        return redirect()->route('doador.index');
    }

    public function delete(Request $request, $id) {
        $doador = Doador::findOrFail($id);
        $doador->delete();
    
        return redirect()->route('doador.index');
    }
}
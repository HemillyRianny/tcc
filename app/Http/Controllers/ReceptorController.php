<?php

namespace App\Http\Controllers;
use App\Models\Necessidade;
use App\Models\Receptor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReceptorController extends Controller
{
    public function index()
    {
        return view('receptor.index');
    }

    public function create(Request $request) {
        $users = User::all();
        return view('receptor.create', ['users'=> $users]);
    }

    public function store(Request $request) {
        $receptor = new Receptor();
        $receptor->cnpj = $request->input('cnpj');
        $receptor->atuacao = $request->input('atuacao');
        $receptor->users_id = Auth::id(); // Obtém o ID do usuário autenticado
        $receptor->save();
        return redirect()->route('necessidade.create');
    }
    
    

    public function edit(Request $request, $id) {
        $receptor = Receptor::findOrFail($id);
        return view('receptor.edit', ['receptor' => $receptor]);
    }

    public function update(Request $request, $id) {
        $receptor = Receptor::findOrFail($id);
        $obj->Receptor_idReceptor=$request->Receptor_idReceptor;
        $obj->cnpj = $request->cnpj;
        $obj->atuacao= $request->atuacao;
        $receptor->save();
    
        return redirect()->route('receptor.index');
    }

    public function delete(Request $request, $id) {
        $receptor = Receptor::findOrFail($id);
        $receptor->delete();
    
        return redirect()->route('receptor.index');
    }
}
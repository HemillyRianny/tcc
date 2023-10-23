<?php

namespace App\Http\Controllers;

use App\Models\Disponabilidade;
use App\Models\Doador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Necessidade;
use App\Models\Receptor;
use App\Models\User;
use App\Models\Item;

use Carbon\Carbon;
class DisponabilidadeController extends Controller
{
    
    public function index()
    {
        $disponabilidades = Disponabilidade::all();
        return view('disponabilidade.index', ['disponabilidades' => $disponabilidades]);
    }

    public function create()
    {
        $users = User::all();
        $doadores = Doador::all();
        $items = Item::all();
        return view('disponabilidade.create', compact('items'));
    }


        public function store(Request $request) {
            $obj = new Disponabilidade();
            // Obtém o usuário logado
            $user = Auth::user();
            $obj->doador_iddoador = $user->id;
            $obj->dataCadastro = Carbon::now()->timestamp;
            $obj->quantidade = $request->quantidade;
            $obj->validade = $request->validade;
            $item = Item::where('iditem', $request->item)->first();
            $obj->items_idItem = $item->iditem;
            $obj->save();
            
            return redirect()->route('welcome');
        }



    
    
    public function edit($id)
    {
        $disponabilidade = Disponabilidade::findOrFail($id);
        $doadores = Doador::all();

        return view('disponabilidade.edit', ['disponabilidade' => $disponabilidade, 'doadores' => $doadores]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'doador_iddoador' => 'required',
            'dataCadastro' => 'nullable',
        ]);

        $disponabilidade = Disponabilidade::findOrFail($id);
        $disponabilidade->doador_iddoador = $request->doador_iddoador;
        $disponabilidade->dataCadastro = $request->dataCadastro;

        $disponabilidade->save();

        return redirect()->route('disponabilidade.index');
    }

    public function delete($id)
    {
        $disponabilidade = Disponabilidade::findOrFail($id);
        $disponabilidade->delete();

        return redirect()->route('disponabilidade.index');
    }
}

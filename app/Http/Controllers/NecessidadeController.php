<?php

namespace App\Http\Controllers;
use App\Models\Necessidade;
use App\Models\Receptor;
use App\Models\User;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class NecessidadeController extends Controller
{
    public function index()
    {

        return view('necessidade.index');
        
    }

    public function create(Request $request) {
        $users = User::all();
        $receptores = Receptor::all();
        $items = Item::all();
        return view('necessidade.create', compact('items'));
    }

    public function store(Request $request) {
        $obj = new Necessidade();
        // Obtém o usuário logado
        $user = Auth::user();
        $obj->Receptor_idReceptor = $user->id;
        $obj->dataCadastro = Carbon::now();
        $obj->quantidade = $request->quantidade;
        $item = Item::where('iditem', $request->item)->first();
        $obj->items_idItem = $item->iditem;
        $obj->save();
        
        return redirect()->route('welcome');
    }
    
    public function edit(Request $request, $id) {
        $necessidade = Necessidade::findOrFail($id);
        return view('necessidade.edit', ['necessidade' => $necessidade]);
    }

    public function update(Request $request, $id) {
        $necessidade = Categoria::findOrFail($id);
        $obj->Receptor_idReceptor=$request->Receptor_idReceptor;
        $obj->dataCadastro = $request->dataCadastro;
        $obj->status = $request->status;
        $categoria->save();
    
        return redirect()->route('necessidade.index');
    }

    public function delete(Request $request, $id) {
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();
    
        return redirect()->route('necessidade.index');
    }
}
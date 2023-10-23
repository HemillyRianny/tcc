<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ItemController extends Controller
{
    public function index()
    {
        return view('item.index');
    }

   
        public function create(Request $request) {
            $Items = Item::all();
    
            return view('item.create', ['Items' => $Items]);
        }
        


        public function store(Request $request)
        {
            $request->validate([
                'nome' => 'required',
            ]);
                
            $item = new Item();
            $item->nome = $request->nome;
            $item->descricao = $request->descricao;
            // Aqui você pode adicionar o código para associar o item ao usuário logado
            // Por exemplo, se você tem uma relação de um-para-muitos entre Usuário e Item:
             $user = Auth::user();

            $item->save();
        
            return redirect()
                ->route('welcome');
        }
        
    public function delete(Request $request, $id) {
        $item = Item::findOrFail($id);
        
        // Remova a foto associada, se existir
        if ($item->foto) {
            unlink(public_path('uploads/' . $item->foto));
        }

        $item->delete();
    
        return redirect()->route('item.index');
    }
}

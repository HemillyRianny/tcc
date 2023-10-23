<?php

namespace App\Http\Controllers;
use App\Models\Doacao;

use Illuminate\Http\Request;

class DoacaoController extends Controller
{
    public function index()
    {
        return view('doacao.index');
    }

    public function create()
    {
        return view('doacao.create');
    }

    public function store(Request $request)
    {
        $obj = new Doacao();
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

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
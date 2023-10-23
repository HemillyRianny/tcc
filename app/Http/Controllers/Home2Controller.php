<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Home2Controller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //auth()->user->perfil
        $usuarios = User::all();
        return view('home2', ['usuarios' => $usuarios]);
    }

    /* public function home() {
        $nomeAleatorio=null, $email=null, $telefone=null, $endereco=null) 
            $usuarioId = User::where('name', $nomeAleatorio)->first()->id;
            $doador = Doador::where('users_id', $usuarioId)->first();
            $receptor = Receptor::where('users_id', $usuarioId)->first();
    
            $disponabilidades = collect();
            $necessidades = collect();
    
            if ($doador) {
                $disponabilidades = Disponabilidade::where('doador_iddoador', $doador->iddoador)->with('item')->get();
            }
    
            if ($receptor) {
                $necessidades = Necessidade::where('Receptor_idReceptor', $receptor->idReceptor)->with('item')->get();
            }
    
            return view('home', compact('nomeAleatorio', 'email','telefone','endereco', 
            'necessidades', 'disponabilidades'));
        }
    } */
}

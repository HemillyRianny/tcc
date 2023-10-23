<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
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
    public function index($nomeAleatorio, $email) {
        // Armazene o valor de $nomeAleatorio na sessão para uso futuro
        session(['nomeAleatorio' => $nomeAleatorio]);
        
        // Faça o mesmo para $email se desejar armazená-lo na sessão
        
        // Restante do seu código, se houver
        
        return view('home', compact('nomeAleatorio', 'email'));
    }
    
}    


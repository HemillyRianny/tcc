<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index(Request $request)
    {
        $nomeUsuario = $request->query('nome');
    }
}

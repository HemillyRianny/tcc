<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
{
    return view('welcome'); // Aqui você retorna a visão (view) da página de boas-vindas
}

}

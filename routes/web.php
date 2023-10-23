<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DisponabilidadeController;
use App\Http\Controllers\DoacaoController;
use App\Http\Controllers\DoadorController;
use App\Http\Controllers\NecessidadeController;
use App\Http\Controllers\ReceptorController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\Disponabilidadedoacaos;
use App\Http\Controllers\UserController;
use App\Models\Necessidade;
use App\Models\Doador;
use App\Models\Receptor;
use App\Models\Disponabilidade;
use App\Models\User;


use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();
// Rota personalizada para o login
Route::get('/login/{nomeAleatorio}/{email}', 'Auth\LoginController@showLoginForm')->name('login.custom');

Route::get('/criar/{id}/{nomeAleatorio}/{email}/{telefone}/{endereco}', function ($nomeAleatorio, $email, $telefone, $endereco) {
    return view('criar', compact('id','nomeAleatorio', 'email', 'telefone', 'endereco',));
})->name('criar');





Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/home2/{id}', function ($id) {
        $usuario = User::find($id);
        $doador = Doador::where('users_id', $usuario->id)->first();
        $receptor = Receptor::where('users_id', $usuario->id)->first();

        $disponabilidades = collect();
        $necessidades = collect();

        if ($doador) {
            $disponabilidades = Disponabilidade::where('doador_iddoador', $doador->iddoador)->with('item')->get();
        }

        if ($receptor) {
            $necessidades = Necessidade::where('Receptor_idReceptor', $receptor->idReceptor)->with('item')->get();
        }

        return view('home2', compact('usuario', 'necessidades', 'disponabilidades'));
    })->name('home2');
});


Route::get('/registro', function () {
    return view('registro');
}); 

Route::get('/images/{filename}', function ($filename) {
    $path = public_path('images/' . $filename);

});




Route::get('/forms1', function () {
    return view('forms1');
});


Route::get('/welcome2', function () {
    return view('welcome2');
});


Route::get('/contato2', function () {
    return view('contato2');
});

Route::get('/cadastros', function () {
    return view('cadastros');
});

Route::get('/', function ($nomeAleatorio = null, $email = null, $telefone = null, $endereco = null) {
   
    return view('welcome', compact('email', 'nomeAleatorio', 'telefone', 'endereco'));
})->name('welcome');

Route::get('/welcome', [UserController::class, 'search']);





Route::get('/home/{id}/{nomeAleatorio?}/{email?}/{telefone?}/{endereco?}', function ($id=null, $nomeAleatorio=null, $email=null, $telefone=null, $endereco=null) {
    // Obtenha o usuário com o ID fornecido
    $usuarioAleatorio = User::where('id', $id)
        ->select('name','id', 'email', 'descricao', 'endereco', 'telefone')
        ->first();

    if ($usuarioAleatorio) {
        $receptorId = Receptor::where('users_id', $usuarioAleatorio->id)->pluck('users_id');
        $doadorId = Doador::where('users_id', $usuarioAleatorio->id)->pluck('users_id');

        $necessidades = Necessidade::whereIn('Receptor_idReceptor', $receptorId)->get();
        $disponabilidades = Disponabilidade::whereIn('doador_iddoador', $doadorId)->get();

        // Adicione as Necessidades e Disponibilidades ao objeto do usuário
        $usuarioAleatorio->necessidades = $necessidades;
        $usuarioAleatorio->disponabilidades = $disponabilidades;
    }

    return view('home', compact('id', 'nomeAleatorio','email','telefone','endereco','usuarioAleatorio'));
})->name('home');


Route::get('/search', function (Request $request) {
    $search = $request->input('search');

    $items = DB::table('items')->where('nome', 'like', '%' . $search . '%')->get();
    $users = DB::table('users')->where('name', 'like', '%' . $search . '%')->get();
    $disponabilidades = collect();
    $necessidades = collect();

    foreach ($items as $item) {
        $disponabilidadesItem = DB::table('disponabilidades')
        ->leftJoin('doadors', 'disponabilidades.doador_iddoador', '=', 'doadors.iddoador')
        ->leftJoin('users', 'doadors.users_id', '=', 'users.id')
        ->where('items_iditem', $item->iditem)
        ->select('disponabilidades.*', 'users.name')
        ->get();

        $necessidadesItem = DB::table('necessidades')
        ->leftJoin('receptors', 'necessidades.Receptor_idReceptor', '=', 'receptors.idReceptor')
        ->leftJoin('users', 'receptors.users_id', '=', 'users.id')
        ->where('items_iditem', $item->iditem)
        ->select('necessidades.*', 'users.name')
        ->get();

        $disponabilidades = $disponabilidades->concat($disponabilidadesItem);
        $necessidades = $necessidades->concat($necessidadesItem);
    }

    return response()->json([
        'disponabilidades' => $disponabilidades,
        'necessidades' => $necessidades,
        'users' => $users
    ]);
});


// Rota personalizada para o login
Route::post('/login-custom/{id}/{nomeAleatorio?}/{email?}/{telefone?}/{endereco?}', function (Request $request, $id, $nomeAleatorio = null, $email = null, $telefone = null, $endereco = null) {
    $emaill = $request->input('email');
    $password = $request->input('password');

    if (Auth::attempt(['email' => $emaill, 'password' => $password])) {
        // O usuário fez login com sucesso
        $user = Auth::user(); // Obter o usuário logado

        // Redirecione-o para a página 'home' com os parâmetros
        return redirect()->route('home', [
            'id'=> $id,
            'nomeAleatorio' => $nomeAleatorio,
            'email' => $email,
            'telefone' => $telefone,
            'endereco' => $endereco,
        ]);
    } else {
        // As credenciais de login estão incorretas, redirecione-o de volta para a página de login
        return redirect()->route('login')->with('error', 'Credenciais inválidas.');
    }
})->name('login-custon');





Route::get('/forms2/{id}/{nomeAleatorio?}/{email?}/{telefone?}/{endereco?}', function ($id=null, $nomeAleatorio = null, $email = null, $telefone = null, $endereco = null) {

    // Passar o email para a visão 'forms2'
    return view('forms2', compact('id','email','nomeAleatorio','telefone','endereco'));
})->name('forms2');


Route::get('/forms3', function () {
   
    // Passar o email para a visão 'forms3'
    return view('form3');
})->name('forms3');

Route::post('/disponabilidade/store', [DisponabilidadeController::class, 'store'])->name('disponabilidade.store');
Route::get('/disponabilidade/create', [DisponabilidadeController::class, 'create'])->name('disponabilidade.create');
Route::get('/disponabilidade', [DisponabilidadeController::class, 'index'])->name('disponabilidade.index');
Route::post('/disponabilidade/update/{id}', [DisponabilidadeController::class, 'update'])->name('disponabilidade.update');
Route::get('/disponabilidade/delete/{id}', [DisponabilidadeController::class, 'delete'])->name('disponabilidade.delete');
Route::get('/disponabilidade/edit/{id}', [DisponabilidadeController::class, 'edit'])->name('disponabilidade.edit');

Route::post('/necessidade/store', [NecessidadeController::class, 'store'])->name('necessidade.store');
Route::get('/necessidade/create', [NecessidadeController::class, 'create'])->name('necessidade.create');
Route::get('/necessidade', [NecessidadeController::class, 'index'])->name('necessidade.index');
Route::post('/necessidade/update/{id}', [NecessidadeController::class, 'update'])->name('necessidade.update');
Route::get('/necessidade/delete/{id}', [NecessidadeController::class, 'delete'])->name('necessidade.delete');
Route::get('/necessidade/edit/{id}', [NecessidadeController::class, 'edit'])->name('necessidade.edit');

Route::post('/receptor/store', [ReceptorController::class, 'store'])->name('receptor.store');
Route::get('/receptor/create', [ReceptorController::class, 'create'])->name('receptor.create');
Route::get('/receptor', [ReceptorController::class, 'index'])->name('receptor.index');
Route::post('/receptor/update/{id}', [ReceptorController::class, 'update'])->name('receptor.update');
Route::get('/receptor/delete/{id}', [ReceptorController::class, 'delete'])->name('receptor.delete');
Route::get('/receptor/edit/{id}', [ReceptorController::class, 'edit'])->name('receptor.edit');


Route::post('/doador/store', [DoadorController::class, 'store'])->name('doador.store');
Route::get('/doador/create', [DoadorController::class, 'create'])->name('doador.create');
Route::get('/doador', [DoadorController::class, 'index'])->name('doador.index');
Route::post('/doador/update/{id}', [DoadorController::class, 'update'])->name('doador.update');
Route::get('/doador/delete/{id}', [DoadorController::class, 'delete'])->name('doador.delete');
Route::get('/doador/edit/{id}', [DoadorController::class, 'edit'])->name('doador.edit');


Route::post('/item/store', [ItemController::class, 'store'])->name('item.store');
Route::get('/item/create', [ItemController::class, 'create'])->name('item.create');
Route::get('/item', [ItemController::class, 'index'])->name('item.index');
Route::post('/item/update/{id}', [ItemController::class, 'update'])->name('item.update');
Route::get('/item/delete/{id}', [ItemController::class, 'delete'])->name('item.delete');
Route::get('/item/edit/{id}', [ItemController::class, 'edit'])->name('item.edit');

Route::post('/doacao/store', [DoacaoController::class, 'store'])->name('doacao.store');
Route::get('/doacao/create', [DoacaoController::class, 'create'])->name('doacao.create');
Route::get('/doacao', [DoacaoController::class, 'index'])->name('doacao.index');
Route::post('/doacao/update/{id}', [DoacaoController::class, 'update'])->name('doacao.update');
Route::get('/doacao/delete/{id}', [DoacaoController::class, 'delete'])->name('doacao.delete');
Route::get('/doacao/edit/{id}', [DoacaoController::class, 'edit'])->name('doacao.edit');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', 'AuthController@index')->name('site.login');
Route::post('/custom-login', 'AuthController@customLogin')->name('site.login.custom');
Route::get('/cadastro', 'AuthController@cadastro')->name('site.cadastro');
Route::post('/custom-cadastro', 'AuthController@customCadastro')->name('site.cadastro.custom');
//Route::get('/signout', 'AuthController@signOut')->name('site.index');


/*Route::get('/login', function(){return 'Login';})->name('site.login');*/

Route::prefix('/app')->group(function(){
    Route::get('/clientes', 'ClientesController@index')->name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', 'ProdutosController@index')->name('app.produtos');
});

Route::fallback(function(){
    echo 'A rota não existe!';
});
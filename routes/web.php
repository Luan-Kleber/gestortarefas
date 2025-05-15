<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Main;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    try {
        DB::connection()->getPDO();
        echo "Conexão efetuada com sucesso, Base de dados: ".DB::connection()->getDataBaseName();
    } catch (Exception $e) {
        die("Erro ao conectar a base de dados. ERROR: ".$e->getMessage());
    }

});

Route::get('/main', [Main::class, 'index']);
Route::get('/users', [Main::class, 'users']);
Route::get('/view', [Main::class, 'view']);
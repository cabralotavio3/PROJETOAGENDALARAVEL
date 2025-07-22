<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerTarefa;

Route::get('/', function () {
    return view('index');
})->name('inicio');

Route::get('/tarefas', [controllerTarefa::class, 'index'])->name('indexTarefas');
Route::get('/tarefas/novo', [controllerTarefa::class, 'create'])->name('novaTarefa');
Route::post('/tarefas', [controllerTarefa::class, 'store'])->name('gravaNovaTarefa');
Route::get('/tarefas/apagar/{id}', [controllerTarefa::class, 'destroy'])->name('deletaTarefa');
Route::get('/tarefas/editar/{id}', [controllerTarefa::class, 'edit'])->name('editaTarefa');
Route::post('/tarefas/{id}', [controllerTarefa::class, 'update'])->name('atualizaTarefa');
Route::get('/tarefas/pesquisa', [controllerTarefa::class, 'pesquisarTarefa'])->name('pesquisarTarefa');
Route::get('/tarefas/procurar', [controllerTarefa::class, 'procurarTarefa'])->name('procurarTarefa');

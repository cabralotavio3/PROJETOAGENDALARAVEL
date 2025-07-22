<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerTarefa;

Route::get('/', function () {
    return view('index');
})->name('inicio');

Route::get('/tarefas', [ControllerTarefa::class, 'index'])->name('indexTarefas');
Route::get('/tarefas/novo', [ControllerTarefa::class, 'create'])->name('novaTarefa');
Route::post('/tarefas', [ControllerTarefa::class, 'store'])->name('gravaNovaTarefa');
Route::get('/tarefas/apagar/{id}', [ControllerTarefa::class, 'destroy'])->name('deletaTarefa');
Route::get('/tarefas/editar/{id}', [ControllerTarefa::class, 'edit'])->name('editaTarefa');
Route::post('/tarefas/{id}', [ControllerTarefa::class, 'update'])->name('atualizaTarefa');
Route::get('/tarefas/pesquisa', [ControllerTarefa::class, 'pesquisarTarefa'])->name('pesquisarTarefa');
Route::get('/tarefas/procurar', [ControllerTarefa::class, 'procurarTarefa'])->name('procurarTarefa');

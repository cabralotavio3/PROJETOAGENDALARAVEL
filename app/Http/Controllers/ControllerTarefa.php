<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;
use Illuminate\Support\Facades\DB;

class ControllerTarefa extends Controller
{
    public function index()
    {
        $dados = Tarefa::all();
        return view('exibirTarefas', compact('dados'));
    }

    public function create()
    {
        return view('novaTarefa');
    }

    public function store(Request $request)
    {
        $dados = new Tarefa();
        $dados->titulo = $request->input('titulo');
        $dados->horario = $request->input('horario');
        $dados->status = $request->input('status');
        $dados->save();

        return redirect('/tarefas')->with('success', 'Nova tarefa cadastrada com sucesso.');
    }

    public function edit(string $id)
    {
        $dados = Tarefa::find($id);
        if(isset($dados)) {
            return view('editarTarefa', compact('dados'));
        }
        return redirect('/tarefas')->with('danger', 'Tarefa não encontrada para edição.');
    }

    public function update(Request $request, string $id)
    {
        $dados = Tarefa::find($id);
        if (isset($dados)){
            $dados->titulo = $request->input('titulo');
            $dados->horario = $request->input('horario');
            $dados->status = $request->input('status');
            $dados->save();
            return redirect('/tarefas')->with('success', 'Tarefa atualizada com sucesso.');
        }
        return redirect("/tarefas")->with('danger', 'Erro ao tentar atualizar tarefa.');
    }

    public function destroy(string $id)
    {
        $dados = Tarefa::find($id);
        if (isset($dados)) {
            $dados->delete();
            return redirect('/tarefas')->with('success', 'Tarefa deletada com sucesso.');
        }
        return redirect('/tarefas')->with('danger', 'Erro ao tentar deletar tarefa.');
    }

    public function pesquisarTarefa(){
        return view('pesquisaTarefa');
    }

    public function procurarTarefa(Request $request)
    {
        $titulo = $request->input('titulo');
        $dados = DB::table('tarefas')->select('id', 'titulo', 'horario', 'status')
            ->where(DB::raw('Lower(titulo)'), 'like', strtolower($titulo).'%')->get();
        return view('exibirTarefas', compact('dados'));
    }
}

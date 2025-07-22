@vite(['resources/js/app.js'])
@extends('layout')
@section('content')
<div class="card border">
    <div class="card-body">
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
                <h1 class="mt-5 text-center">ATUALIZE OS DADOS DA SUA TAREFA</h1>
            </div>
        </div>
        <form action="/tarefas/{{$dados->id}}" method="POST"> 
            @csrf
            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" class="form-control" name="titulo"
                       value="{{$dados->titulo}}">
            </div>
            <div class="form-group">
                <label for="horario">Horário:</label>
                <input type="datetime-local" class="form-control" name="horario"
                       value="{{$dados->horario ? \Carbon\Carbon::parse($dados->horario)->format('Y-m-d\TH:i') : ''}}">
            </div>
            <div class="form-group">
                <label for="status">Status:</label> 
                <input type="text" class="form-control" name="status"
                       value="{{$dados->status}}"> 
            </div>
            <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='{{route('indexTarefas')}}'" type="button"
                    class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div>
</div>
@endsection

@section('javascript')
@endsection
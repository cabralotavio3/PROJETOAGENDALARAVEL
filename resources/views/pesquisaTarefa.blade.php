@vite(['resources/js/app.js'])
@extends('layout')
@section('content')
<div class="card border">
    <div class="card-body">
        <form action="{{ route('procurarTarefa') }}" method="GET">
            @csrf
            <div class="form-group">
                <label for="titulo">Título da Tarefa</label> 
                <input type="text" class="form-control" name="titulo" 
                       placeholder="Informe o título da tarefa para pesquisar"> 
            </div>
            <button type="submit" class="btn btn-outline-primary btn-sm">Pesquisar</button>
            <button onclick="window.location.href='{{route('indexTarefas')}}'" type="button"
                    class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div>
</div>
@endsection
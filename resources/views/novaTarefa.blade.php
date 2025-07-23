@vite(['resources/js/app.js'])
@extends('layout')
@section('content')
<div class="card border">
    <div class="card-body">
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
                <h1 class="mt-5 text-center">CADASTRE UMA NOVA TAREFA</h1> 
            </div>
        </div>
        <form action="{{ route('gravaNovaTarefa') }}" method="POST"> 
            @csrf
            <div class="form-group">
                <label for="titulo">Título: </label> 
                <input type="text" class="form-control" name="titulo"
                       placeholder="Informe o título da tarefa">
            </div>
            <div class="form-group">
                <label for="horario">Horário:</label> 
                <input type="datetime-local" class="form-control" name="horario"> 
            </div>
            <div class="form-group">
                <label for="status">Status:</label> 
                <input type="text" class="form-control" name="status" value="Pendente" readonly> 
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

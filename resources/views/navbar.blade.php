@vite(['resources/js/app.js'])
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark p-0 shadow">
    <div class="container-fluid">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{ route('inicio') }}">Gerenciador de Tarefas</a>
        
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="{{route('inicio')}}">Página inicial</a>
                </li>
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="{{route('indexTarefas')}}">Exibir Tarefas</a>
                </li>
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="{{route('novaTarefa')}}">Cadastrar Tarefa</a>
                </li>
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="{{route('pesquisarTarefa')}}">Pesquisar Tarefa</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
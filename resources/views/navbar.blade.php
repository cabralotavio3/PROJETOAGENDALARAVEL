@vite(['resources/js/app.js'])
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Gerenciador de Tarefas</a> 
</nav>
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('inicio')}}">
                            <span data-feather="home"></span>
                            Página inicial <span class="sr-only"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('indexTarefas')}}">
                            <span data-feather="file"></span>
                            Exibir Tarefas Cadastradas 
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('novaTarefa')}}">
                            <span data-feather="shopping-cart"></span>
                            Cadastro de Tarefas 
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('pesquisarTarefa')}}"> 
                            <span data-feather="users"></span>
                            Pesquisar Tarefa 
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
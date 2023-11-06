<!DOCTYPE html>
<html>

    <head>
        <link rel="shortcut icon" href="#"/>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>BookTrack</title>

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="{{ asset('css/menu.css') }}"> 

        <link rel="stylesheet" href="{{ asset('css/sweetalert2.min.css') }}">

    </head>

    <body>

        <nav id="menu-nav" class="navbar navbar-expand-lg navbar-light">
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="input-group m-lg-2" style="max-width: 700px;">
                    
                    <input id="buscar" class="form-control" type="search" placeholder="Buscar" aria-label="Buscar">
                    <div class="input-group-append">
                        <button id="btn" class="btn" type="submit">Buscar</button>
                    </div>
                </div>
            </div>

            <div id="botones" class="navbar-nav ml-auto">
                <a href="#">
                    <button id="btn" class="btn">Géneros</button>
                </a>
                <a href="#">
                    <button id="btn" class="btn">Autores</button>
                </a>

                <div id="perfil" class="navbar-nav ml-auto">
                    <a href="#">
                        <button id="btn" class="btn">Mi perfil</button>
                    </a>
                </div>
            </div>
        
            <div>
                <a class="btn custom-icon-color dropdown-item" style="margin-left: 30px; margin-right: 30px;" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="bi bi-x-lg"></i></a>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

        </nav>
        


    <script src="{{ asset('css/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('css/bootstrap.min.js') }}"></script>
    <script src="{{ asset('css/popper.min.js') }}"></script>

    <script src="{{ asset('css/sweetalert2.all.min.js') }}"></script>

    </body>

</html>
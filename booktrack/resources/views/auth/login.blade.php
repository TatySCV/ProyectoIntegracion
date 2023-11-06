@extends('layouts.app')

@section('content')

    <head>
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    </head>

    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center aling-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12 bg-light text-dark mx-auto">
                        
                        <form class="form" method="POST" action="{{ route('login') }}">
                                    @csrf
                            <h5 class="text-center text-white">BOOKTRACK</h5>

                            <h3 class="text-center text-dark mt-5">Iniciar Sesión</h3>
                            <div class="form-group mt-5 align-items-center">
                                <input type="text" name="email" id="email" placeholder="Correo electrónico" class="form-control mx-auto" style="max-width: 400px;">
                            </div>
                            <div class="form-group mt-4 align-items-center">
                                <input type="password" name="password" id="password" placeholder="Contraseña" class="form-control mx-auto" style="max-width: 400px;">
                            </div>

                            <div class="form-group text-center">
                                <input id="boton" type="submit" name="submit" class="btn mt-5 btn-lg btn-block" value="Iniciar">
                            </div>
                        </form>   

                        <p class="mt-5">
                            <a href="{{ route('register') }}">¿No eres miembro aún? ¡Únete aquí!</a>
                        </p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

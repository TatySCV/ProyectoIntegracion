@extends('layouts.app')

@section('content')

    <head>
            <link rel="stylesheet" href="{{ asset('css/registro.css') }}">
    </head>

    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center aling-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12 bg-light text-dark mx-auto">

                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <h5 class="text-center text-white">BOOKTRACK</h5>
                            <h3 class="text-center text-dark mt-5">Registro</h3>
                                
                                <div class="form-group mt-5 align-items-center">
                                    <input type="text" name="name" id="name" placeholder="Nombre usuario" class="form-control mx-auto" style="max-width: 400px;">
                                </div>

                                <div class="form-group mt-2 align-items-center">
                                    <input type="email" name="email" id="email" placeholder="Correo" class="form-control mx-auto" style="max-width: 400px;">
                                </div>

                                <div class="form-group mt-2 align-items-center">
                                    <input type="password" name="password" id="password" placeholder="Contraseña" class="form-control mx-auto" style="max-width: 400px;">
                                </div>

                                <div class="form-group mt-2 align-items-center">
                                    <input type="password" name="password_confirmation" id="password-confirm" placeholder="Confirmar Contraseña" class="form-control mx-auto" style="max-width: 400px;">
                                </div>

                                <div class="form-group text-center">
                                    <input id="boton" type="submit" name="submit" class="btn mt-5 btn-lg btn-block" value="Registrar">
                                </div>
                            
                        </form>

                            <p class="mt-5">
                                    <a href="{{ route('login') }}">¿Ya tiene cuenta? ¡Ingresa aquí!</a>
                            </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

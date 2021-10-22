<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB css-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />


    <script src="{{ mix('js/app.js') }}" defer></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />


    <title>Panel de control</title>

</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>


    <header class="contenedor-cabecera">
        <p class="jugador-numeral">Jugador #{{ Auth::user()->id }} </p>
        <a class="jugador-salir" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown"
            aria-expanded="false">
            <img src="{{ asset('images/juegos/salir.png') }}" class="" height="25" alt=""
                loading="lazy" />
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
            <li>
                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                    {{ __('Profile') }}
                </x-jet-dropdown-link>
                {{-- <a class="dropdown-item" href="#">My profile</a> --}}
            </li>
            <li>
                <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                    {{ __('Log out') }}
                </x-jet-dropdown-link>
                <form method="POST" id="logout-form" action="{{ route('logout') }}">
                    @csrf
                </form>
                {{-- <a class="dropdown-item" href="#">Logout</a> --}}
            </li>
        </ul>
        <p class="jugador-nombre">{{ Auth::user()->name }}</p>
    </header>
    <!--Contenedor cabecera-->
    @if (session('codigo'))
        <div class="col-md-12">
            <div class="alert alert-success">
                <strong>{{ session('codigo') }}</strong>
            </div>
        </div>
    @endif

    <div class="contenedor-central">
        <div class="contenedor-primario">
            <div class="titulo-cartas-ocultas">
                <p>Cartas Ocultas</p>
            </div>
            <div class="contenedor-botones">
                <div class="contenedor-boton-pregunta">
                    <button id="botones-001" type="button" class="btn btn-success" data-mdb-toggle="modal"
                        data-mdb-target="#exampleModal">Hacer una pregunta</button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Elije las targetas <img
                                            src="{{ asset('images/juegos/lado-opuesto.jpg') }}" alt=""
                                            style="width: 4.5%;"></h5>

                                    <p>
                                        <button type="button" class="btn-close" data-mdb-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <!--checkbox---------------------------------------------------------------------------------->
                                <div class="modal-body">
                                    <!--elegir preguntas______________________________________________________________________________-->



                                    <!-- programadores_____________________________________________________________________________-->
                                    <div class="container" style="float: left; width: auto; margin-left: 7%;">

                                        <div class="form-check">
                                            <p>
                                            <h5>Programador: <i class="fas fa-user-alt"></i></h5>
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault" />
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Pedro
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" />
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Juan
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" />
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Carlos
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" />
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Juanita
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" />
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Antonio
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" />
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Carolina
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" />
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Manuel
                                            </label>
                                        </div>
                                    </div>
                                    <p>
                                        <!-- modulos_________________________________________________________________________________________________________-->
                                    <div class="container" style="float: left; width: auto; margin-left: 4%;">
                                        <div class="form-check">
                                            <h5>Modulo: <i class="fas fa-th-large"></i></h5>
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault" />
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Nomina
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" />
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Facturacion
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" />
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Recibos
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" />
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Comprobante contable
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" />
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Usuarios
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" />
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Contabilidad
                                            </label>
                                        </div>
                                    </div>

                                    <p>
                                        <!-- error______________________________________________________________________________________-->
                                    <div class="container" style="float: left; width: auto; margin-left: 4%;">
                                        <div class="form-check">
                                            <h5>Error: <i class="fas fa-exclamation-circle"></i></h5>
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault" />
                                            <label class="form-check-label" for="flexCheckDefault">
                                                404
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" />
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Stack overflow
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" />
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Memory out of range
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" />
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Null pointer
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" />
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Syntax error
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" />
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Encoding error
                                            </label>
                                        </div>

                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" name="submit" class="btn btn-success">Preguntar</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="conten-button-adivinarYpreguntar">
                    <form action="{{ route('dashboard.preguntar', $id) }}" method="POST">
                        @csrf
                        <!-- boton + modal 2---------------------------------------------------------------->
                        <button id="botones-001" type="submit" class="btn btn-primary" data-mdb-toggle="modal"
                            data-mdb-target="#exampleModal-2">Descubrir carta <i
                                class="fas fa-angle-right"></i></button>
                        <!-- Modal 2------------------------------------------------------------------------>
                        {{-- <div class="modal fade" id="exampleModal-2" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Adivina la carta <img
                                                src="{{ asset('images/juegos/lado-opuesto.jpg') }}" alt=""
                                                style="width: 4.5%;"></h5>

                                        <p>
                                            <button type="button" class="btn-close" data-mdb-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!--elegir cartas______________________________________________________________________________-->

                                        <!-- programadores_____________________________________________________________________________-->
                                        <div class="container" style="float: left; width: auto; margin-left: 7%;">

                                            <div class="form-check">
                                                <p>
                                                <h5>Programador: <i class="fas fa-user-alt"></i></h5>
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault" />
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Pedro
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked" />
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Juan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked" />
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Carlos
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked" />
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Juanita
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked" />
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Antonio
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked" />
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Carolina
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked" />
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Manuel
                                                </label>
                                            </div>


                                        </div>
                                        <p>
                                            <!-- modulos_________________________________________________________________________________________________________-->
                                        <div class="container" style="float: left; width: auto; margin-left: 4%;">
                                            <div class="form-check">
                                                <h5>Modulo: <i class="fas fa-th-large"></i></h5>
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault" />
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Nomina
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked" />
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Facturacion
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked" />
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Recibos
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked" />
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Comprobante contable
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked" />
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Usuarios
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked" />
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Contabilidad
                                                </label>
                                            </div>
                                        </div>

                                        <p>
                                            <!-- error______________________________________________________________________________________-->
                                        <div class="container" style="float: left; width: auto; margin-left: 4%;">
                                            <div class="form-check">
                                                <h5>Error: <i class="fas fa-exclamation-circle"></i></h5>
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault" />
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    404
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked" />
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Stack overflow
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked" />
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Memory out of range
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked" />
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Null pointer
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked" />
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Syntax error
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked" />
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Encoding error
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" name="submit" class="btn btn-primary">Adivinar</button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </form>

                </div>

                @isset($last)
                    @if ($last->ganador_id)
                        <div class="conten-button-regresar">
                            <form action="{{ route('inicio') }}" method="get">
                                <button id="botones-001" type="submit" class="btn btn-warning">Regresar <i
                                        class="fas fa-angle-right"></i></button>
                            </form>
                        </div>
                    @endif
                @endisset

            </div>

            @yield('cartasOcultas')

            <div class="accordion" id="accordionExample" style="width: 20%; float: right; margin-right: 1.5%;">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button style="background-color: #182848;" class="accordion-button collapsed" type="button"
                            data-mdb-toggle="collapse" data-mdb-target="#collapseThree" aria-expanded="false"
                            aria-controls="collapseThree">
                            <p style="color: white; font-size: 120%;">Mis Notas</p>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-mdb-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="overflow-auto" style="height: 215px;">
                                <table class="table" id="table-hoja-notas">

                                    <!--programador---------------------------------------------------------------------->
                                    <thead>
                                        <tr>
                                            <th scope="col">Quien</th>
                                            <th scope="col">Notas</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>Pedro</td>
                                            <th scope="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault" />
                                                </div>
                                            </th>
                                        </tr>

                                        <tr>
                                            <td>Juan</td>
                                            <th scope="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault" />
                                                </div>
                                            </th>
                                        </tr>

                                        <tr>
                                            <td>Carlos</td>
                                            <th scope="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault" />
                                                </div>
                                            </th>
                                        </tr>

                                        <tr>
                                            <td>Juanita</td>
                                            <th scope="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault" />
                                                </div>
                                            </th>
                                        </tr>

                                        <tr>
                                            <td>Antonio</td>
                                            <th scope="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault" />
                                                </div>
                                            </th>
                                        </tr>

                                        <tr>
                                            <td>Carolina</td>
                                            <th scope="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault" />
                                                </div>
                                            </th>
                                        </tr>

                                        <td>Manuel</td>
                                        <th scope="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault" />
                                            </div>
                                        </th>
                                        </tr>

                                        <!--MODULOS--------------------------------------------------------------------------->
                                        <thead>
                                            <tr>
                                                <th scope="col">Modulo</th>
                                                <th scope="col">Notas</th>
                                            </tr>
                                        </thead>

                                        <tr>
                                            <td>Nomina</td>
                                            <th scope="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault" />
                                                </div>
                                            </th>
                                        </tr>

                                        <tr>
                                            <td>Facturacion</td>
                                            <th scope="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault" />
                                                </div>
                                            </th>
                                        </tr>

                                        <tr>
                                            <td>Recibos</td>
                                            <th scope="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault" />
                                                </div>
                                            </th>
                                        </tr>

                                        <tr>
                                            <td>Comprobante contable</td>
                                            <th scope="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault" />
                                                </div>
                                            </th>
                                        </tr>

                                        <tr>
                                            <td>Usuarios</td>
                                            <th scope="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault" />
                                                </div>
                                            </th>
                                        </tr>

                                        <tr>
                                            <td>Contabilidad</td>
                                            <th scope="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault" />
                                                </div>
                                            </th>
                                        </tr>

                                        <!--ERROR---------------------------------------------------------------------------------->
                                        <thead>
                                            <tr>
                                                <th scope="col">Error</th>
                                                <th scope="col">Notas</th>
                                            </tr>
                                        </thead>

                                        <tr>
                                            <td>404</td>
                                            <th scope="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault" />
                                                </div>
                                            </th>
                                        </tr>

                                        <td>Stack overflow</td>
                                        <th scope="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault" />
                                            </div>
                                        </th>
                                        </tr>

                                        <td>Memory out of range</td>
                                        <th scope="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault" />
                                            </div>
                                        </th>
                                        </tr>

                                        <td>Null pointer</td>
                                        <th scope="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault" />
                                            </div>
                                        </th>
                                        </tr>

                                        <td>Syntax error</td>
                                        <th scope="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault" />
                                            </div>
                                        </th>
                                        </tr>

                                        <td>Encoding error</td>
                                        <th scope="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault" />
                                            </div>
                                        </th>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            // COndicional para validad el genero
            if (isset($_POST['genero'])) {
                echo $_POST['genero']; // Muestra el CheckBox marcado.
            }
            ?>
        </div>

        <!--contenedor secundario-->
        <div class="contenedor-secundario">
            @yield('misCartas')

            <!--menu lateral izquierdo jugadores-->
            <div class="menu-lateral">
                <p>Jugadores:</p>
                <!--jugadores-->
                <ol class="list-group list-group-numbered">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold"> Jugador:</div>
                            Manuel
                        </div>
                        <a class="badge bg-primary rounded-pill" data-mdb-toggle="popover" data-mdb-placement="bottom"
                            data-mdb-content="El jugador Manuel te ah hecho una pregunta"><i
                                class="far fa-comment"></i></a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Jugador:</div>
                            Libardo
                        </div>
                        <span class="badge bg-primary rounded-pill"></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Jugador:</div>
                            Vannesa
                        </div>
                        <span class="badge bg-primary rounded-pill"></span>
                    </li>
                </ol>
            </div>
        </div>
    </div>

    <!--mdbbootstrap js-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>

    <!--jquery js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!--script efecto imagenes-->
    <script>
        $(document).ready(function() {
            $('.zoom').hover(function() {
                $(this).addClass('transition');
            }, function() {
                $(this).removeClass('transition');
            });
        });
    </script>
</body>

</html>

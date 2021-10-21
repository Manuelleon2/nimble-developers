@extends('layouts.layout')

@section('content')

    <body>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>


        <!--cabecera-->
        <header class="conten-cabecera">
            <p class="jugador-numeral">Jugador #4</p>
            <a class="jugador-salir" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown"
                aria-expanded="false">
                <img src="{{ asset('images/juegos/salir.png') }}" class="" height="25" alt=""
                    loading="lazy" />
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                <li>
                    <a class="dropdown-item" href="#">My profile</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Settings</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Logout</a>
                </li>
            </ul>
            <p class="jugador-name">Leonar Enrique</p>
        </header>


        <!--cartas-->
        <div class="conten-central">
            <div class="contenedor-001">
                <div class="titu-cartas-ocultas">
                    <p>Cartas Ocultas</p>
                </div>
                <!--opciones butoons-->
                <div class="conten-botones">
                    <div class="conten-button-pregunta">
                        <!-- boton + modal________________________________________________________________________-->
                        <button id="botones-001" type="button" class="btn btn-success" data-mdb-toggle="modal"
                            data-mdb-target="#exampleModal">Hacer una pregunta</button>
                        <!-- Modal -->
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
                                        <button type="button" class="btn btn-success">Preguntar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="conten-button-paso">
                        <button id="botones-001" type="button" class="btn btn-primary">Descubrir carta <i
                                class="fas fa-angle-right"></i></button>
                    </div>
                </div>


                <!--cartas ocultas-->
                <div class="conten-cartas-ll">
                    <div class="conten-cartas-1-0"><img class="zoom" id="carta-0"
                            src="{{ asset('images/juegos/lado-opuesto.jpg') }}" alt="">
                    </div>
                    <div class="conten-cartas-2-0"><img class="zoom" id="carta-0"
                            src="{{ asset('images/juegos/lado-opuesto.jpg') }}" alt="">
                    </div>
                    <div class="conten-cartas-3-0"><img class="zoom" id="carta-0"
                            src="{{ asset('images/juegos/lado-opuesto.jpg') }}" alt="">
                    </div>
                </div>



                <!--mis notas-->
                <!--desplegable mis notas___________________________________________________-->
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
                                <div class="overflow-auto">
                                    <table class="table" id="table-hoja-notas">
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
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


            <div class="contenedor-002">
                <div class="conten-cartas">
                    <div class="conten-cartas-1"><img class="zoom" id="carta-0"
                            src="{{ asset('images/juegos/error_2.png') }}" alt=""></div>
                    <div class="conten-cartas-2"><img class="zoom" id="carta-0"
                            src="{{ asset('images/juegos/programador-03.jpg') }}" alt="">
                    </div>
                    <div class="conten-cartas-3"><img class="zoom" id="carta-0"
                            src="{{ asset('images/juegos/modulo-recibo.jpg') }}" alt="">
                    </div>
                    <div class="conten-cartas-4"><img class="zoom" id="carta-0"
                            src="{{ asset('images/juegos/programador-01.jpg') }}" alt="">
                    </div>
                </div>

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
    </body>
@endsection

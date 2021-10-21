@extends('layouts.layout')

@section('content')

    <body id="Fondo_Pre-Inicio">

        <div class="conten-titu-pre-inicio">
            <h1 id="TituloPre-inicio">Que comience la diversion!!</h1>
        </div>

        <div id="contenedor-imagen404">
            <img src="{{ asset('images/error404.png') }}" alt="Detective" width="75%">
        </div>

        <div id="contenedor-imagen-fail">
            <img src="{{ asset('images/fail.gif') }}" alt="Detective" width="75%" style="float: right">
        </div>

        <div id="contenedor-Espacio-intermedio">

            <form action="{{ route('dashboard.generar', $id) }}" method="get">
                <div class="zoom" id="contenedor-target-l">
                    <h1 id="TituloTarget">Crear Partida</h1>
                    <p id="ParrafoTarget">Inicia una partida e invita a 4 personas a jugar</p>

                    <button type="submit" class="btn btn-primary" id="ButtonTarget">Generar Partida</button>
                </div>
            </form>

            <div class="zoom" id="contenedor-target-ll">
                <h1 id="TituloTarget">Unirme a una Partida</h1>
                <p id="ParrafoTarget">Ingresa el codigo de la partida y empieza a jugar</p>

                <div id="InputTarget">
                    <input type="text" class="form-control" placeholder="Codigo" />
                </div>

                <button type="button" class="btn btn-success" id="ButtonTarget">Unirme</button>
            </div>
        </div>
    </body>
@endsection

@extends('layouts.dashboard')

@section('cartasOcultas')

    @isset($last)
        @if ($last->ganador_id)
            <div class="conten-cartas-ll">
                <div class="conten-cartas-1-0"><img class="zoom" id="carta-0"
                        src="{{ asset($last->programador->img) }}" alt="">
                </div>
                <div class="conten-cartas-2-0"><img class="zoom" id="carta-0" src="{{ asset($last->modulo->img) }}"
                        alt="">
                </div>
                <div class="conten-cartas-3-0"><img class="zoom" id="carta-0" src="{{ asset($last->error->img) }}"
                        alt="">
                </div>
            </div>
        @else
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
        @endif
    @endisset

@endsection

@section('misCartas')
    <div class="contenedor-cartas">
        <div class="conten-cartas-1"><img class="zoom" id="carta-0" src="{{ asset($sala->img) }}" alt=""></div>
        <div class="conten-cartas-2"><img class="zoom" id="carta-0" src="{{ asset($sala->img2) }}" alt="">
        </div>
        <div class="conten-cartas-3"><img class="zoom" id="carta-0" src="{{ asset($sala->img3) }}" alt="">
        </div>
        <div class="conten-cartas-4"><img class="zoom" id="carta-0" src="{{ asset($sala->img4) }}" alt="">
        </div>
    </div>
@endsection

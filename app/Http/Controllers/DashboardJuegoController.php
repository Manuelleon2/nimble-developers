<?php

namespace App\Http\Controllers;

use App\Models\Partida;
use App\Models\Sala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardJuegoController extends Controller
{
    public function index()
    {
        $codigo = new Partida();

        /* busqueda ultima partida */
        $last = Partida::all()->last();
        $id = Auth::user()->id;

        return view('dashboard-juego', compact('last', 'id', 'codigo'));
    }

    public function asignarCard()
    {

        /* Datos de la partida_________*/

        $idProgramador = "123456";
        $programador = '';
        for ($i = 0; $i < 1; $i++) {
            $programador .= $idProgramador[rand(0, strlen($idProgramador) - 1)];
        }

        $idModulo = "123456";
        $modulo = '';
        for ($i = 0; $i < 1; $i++) {
            $modulo .= $idModulo[rand(0, strlen($idModulo) - 1)];
        }

        $idError = "123456";
        $error = '';
        for ($i = 0; $i < 1; $i++) {
            $error .= $idError[rand(0, strlen($idError) - 1)];
        }

        $caracteresPosibles = "0123456789abcdefghijklmnopqrstvwxyz";
        $codigo = '';
        for ($i = 0; $i < 6; $i++) {
            $codigo .= $caracteresPosibles[rand(0, strlen($caracteresPosibles) - 1)];
        }

        /* Guardado de dichos datos_________*/

        $id = Auth::user()->id;

        $partida = new Partida();
        $partida->codigo = $codigo;
        $partida->modulo_id = $modulo;
        $partida->programador_id = $programador;
        $partida->error_id = $error;
        /* $partida->save(); */


        /* Datos de la salas_________*/

        $restante_modulos =  DB::select('select id from modulos where id != ?', [$partida->modulo_id]);
        $mol = array_rand($restante_modulos);

        /* return $restante_modulos; */
        return $mol;


        $sala = new Sala();
        $sala->partida_id = $partida->id;
        $sala->user_id = $id;

        return redirect()->route('dashboard.juego')->with('codigo', 'El codigo de la partida es ' . $codigo);
    }

    public function ganaste($id)
    {
        $last = Partida::all()->last();
        $last->ganador_id = $id;
        $last->save();
        /* return $last; */
        return redirect()->route('dashboard.juego')->with('ganaste', 'El cliente se actualizo correctamente ');
    }
}

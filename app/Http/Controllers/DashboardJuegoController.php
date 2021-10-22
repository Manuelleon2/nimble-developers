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
        /* $id_partida = Partida::all()->pluck('id')->last(); */
        $sala = Sala::where('partida_id', $last->id)->where('user_id', auth()->user()->id)->first();

        $id = Auth::user()->id;

        return view('dashboard-juego', compact('last', 'id', 'codigo', 'sala'));
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


        $partida = new Partida();
        $partida->codigo = $codigo;
        $partida->modulo_id = $modulo;
        $partida->programador_id = $programador;
        $partida->error_id = $error;
        $partida->save();


        /* Datos de la salas_________*/

        $restante_modulos =  DB::table('modulos')
            ->where('id', '!=', $partida->modulo_id)
            ->inRandomOrder()
            ->pluck('img')
            ->first();

        $restante_programadores =  DB::table('programadors')
            ->where('id', '!=', $partida->programador_id)
            ->inRandomOrder()
            ->pluck('img')
            ->first();

        $restante_errores =  DB::table('errors')
            ->where('id', '!=', $partida->error_id)
            ->inRandomOrder()
            ->pluck('img')
            ->first();



        $a = "123";
        $variable = '';
        for ($i = 0; $i < 1; $i++) {
            $variable .= $a[rand(0, strlen($a) - 1)];
        }

        $img_random = '';


        if ($variable == 1) {

            $res_modulos =  DB::table('modulos')
                ->where('id', '!=', $partida->modulo_id)
                ->inRandomOrder()
                ->pluck('id')
                ->first();

            $m =  DB::table('modulos')
                ->where('id', '!=', $partida->modulo_id)
                ->where('id', '!=', $res_modulos)
                ->inRandomOrder()
                ->pluck('img')
                ->first();
            $img_random = $m;
        }


        if ($variable == 2) {
            $res_programadores =  DB::table('programadors')
                ->where('id', '!=', $partida->programador_id)
                ->inRandomOrder()
                ->pluck('id')
                ->first();

            $p =  DB::table('programadors')
                ->where('id', '!=', $partida->programador_id)
                ->where('id', '!=', $res_programadores)
                ->inRandomOrder()
                ->pluck('img')
                ->first();
            $img_random = $p;
        }


        if ($variable == 3) {
            $res_errores =  DB::table('errors')
                ->where('id', '!=', $partida->error_id)
                ->inRandomOrder()
                ->pluck('id')
                ->first();

            $e =  DB::table('errors')
                ->where('id', '!=', $partida->error_id)
                ->where('id', '!=', $res_errores)
                ->inRandomOrder()
                ->pluck('img')
                ->first();
            $img_random = $e;
        }

        /*  Guardado de dichos datos_____________ */
        $sala = new Sala();
        $sala->partida_id = $partida->id;
        $sala->img = $restante_modulos;
        $sala->img2 = $restante_errores;
        $sala->img3 = $restante_programadores;
        $sala->img4 = $img_random;
        $sala->user_id = Auth::user()->id;;
        $sala->save();

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

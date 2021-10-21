<?php

namespace App\Http\Controllers;

use App\Models\Partida;
use Illuminate\Http\Request;

class DashboardJuegoController extends Controller
{
    public function index()
    {
        $caracteresPosibles = "0123456789abcdefghijklmnopqrstvwxyz";
        $azar = '';
        for ($i = 0; $i < 6; $i++) {
            $azar .= $caracteresPosibles[rand(0, strlen($caracteresPosibles) - 1)];
        }

        $codigo = new Partida();
        $codigo->codigo = $azar;
        $codigo->save();

        return view('dashboard-juego', compact('azar'));
    }

    public function codigo()
    {
    }
}

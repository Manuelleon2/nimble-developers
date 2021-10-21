<?php

namespace App\Http\Controllers;

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

        return view('dashboard-juego', compact('azar'));
    }
}

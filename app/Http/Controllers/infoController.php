<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Administrador;
use Illuminate\Http\Request;

class infoController extends Controller
{
    public function index()
    {
        // Busca o administrador com base no ID da sessão ou outro critério adequado
        $idAdministrador = session('id');
        // dd($idAdministrador);
        $administrador = Administrador::find($idAdministrador);
        // dd($administrador);
        if (!$administrador) {
            abort(404, 'Administrador não encontrado');
        }

        return view('site.dashboard.administrativo.info', compact('administrador'));
    }
}

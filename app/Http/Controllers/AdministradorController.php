<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use App\Models\Aula;
use App\Models\Cursos;
use App\Models\Notificacao;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class AdministradorController extends Controller
{

    public $administrador;
    public $idAdministrador;

    public function __construct(Administrador $administrador) {
        $this -> administrador = $administrador;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idAdministrador = session('id');
        // dd($idAdministrador);
        $administrador = Administrador::find($idAdministrador);
        // dd($administrador);
        if (!$administrador) {
            abort(404, 'Administrador não encontrado');
        }

        $idnotificacao = session('id');
        $lista = Notificacao::where('statusNotificacao', 'ativo')->get();

        return view('site.dashboard.administrativo.perfil.index', compact('administrador','lista'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function cadAdmin(Request $request)
    {
        $request->merge(['created_at' => now()]);
        $request->merge(['updated_at' => now()]);
    
        $request->validate([

            'tituloNotificacaoAdmin'   => 'nullable|string|max:35',
            'mensagemNotificacaoAdmin' => 'nullable|string|max:55',

        ],[  
            'tituloNotificacaoAdmin.max'    => 'O titulo da notificação deve ter no máximo 35 caracteres.',
            'mensagemNotificacaoAdmin.max'  => 'A mensagem da notificação deve ter no máximo 55 caracteres.',
        ]);

            // Cadastrar o aluno
            $administrador = new Administrador();
    
            $administrador->tituloNotificacaoAdmin    = $request->input('tituloNotificacaoAdmin');
            $administrador->mensagemNotificacaoAdmin  = $request->input('mensagemNotificacaoAdmin');

            $administrador-> save();

            return redirect()->route('index.perfil')->with('sucess', 'Notificação enviada com sucesso!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function show(Administrador $administrador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function edit(Administrador $administrador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$idAdministrador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Administrador $administrador)
    {
        //
    }
}

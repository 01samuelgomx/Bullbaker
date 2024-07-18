<?php

namespace App\Http\Controllers\Api;

use App\Models\Notificacao;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificacaoController extends Controller
{
    public $notificacao;
    public $idnotificacao;

    public function __construct(Notificacao $notificacao) {
        $this -> notificacao = $notificacao;
    }
    /**
     * @return \Illuminate\Http\Response
     */
    public function listarNotificacao()
    {
        $notificacoesAtivas = Notificacao::where('statusNotificacao', 'ativo')->get()->map(function($notificacao) {
            $notificacao->fotoNotificacao = url('storage/img/notificacao/' . $notificacao->fotoNotificacao);
            return $notificacao;
        });
    
        return response()->json([
            'NotificacoesAtivas' => $notificacoesAtivas
        ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notificacao  $notificacao
     * @return \Illuminate\Http\Response
     */
    public function show(Notificacao $notificacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notificacao  $notificacao
     * @return \Illuminate\Http\Response
     */
    public function edit(Notificacao $notificacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notificacao  $notificacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notificacao $notificacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notificacao  $notificacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notificacao $notificacao)
    {
        //
    }
}

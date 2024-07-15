<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use App\Models\Notificacao;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NotificacaoController extends Controller
{

    public $notificacao;
    public $idnotificacao;

    public function __construct(Administrador $notificacao) {
        $this -> notificacao = $notificacao;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
    public function cadNotificacao(Request $request)
    {
        $request->merge(['created_at' => now()]);
        $request->merge(['updated_at' => now()]);
    
        $request->validate([

            'tituloNotificacao'    => 'required|string|max:35',
            'mensagemNotificacao'  => 'required|string|max:150',
            'statusNotificacao'          => 'required|in:ativo,desativo',
            'fotoNotificacao'      => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ],[  
            'tituloNotificacao.max'    => 'O titulo da notificação deve ter no máximo 35 caracteres.',
            'mensagemNotificacao.max'  => 'A mensagem da notificação deve ter no máximo 150 caracteres.',
            'fotoNotificacao.image'    => 'O arquivo deve ser uma imagem.',
            'fotoNotificacao.mimes'    => 'A imagem deve estar em um dos seguintes formatos: jpeg, png, jpg, gif, svg.',
            'fotoNotificacao.max'      => 'A imagem deve ter no máximo 2MB.',
        ]);

            // Cadastrar o aluno
            $notificacao = new Notificacao();
    
            $notificacao->tituloNotificacao    = $request->input('tituloNotificacao');
            $notificacao->mensagemNotificacao  = $request->input('mensagemNotificacao');
            $notificacao->statusNotificacao    = 'ativo';

           // Upload da imagem
            if ($request->hasFile('fotoNotificacao') && $request->file('fotoNotificacao')->isValid()) {
            $file = $request->file('fotoNotificacao');
            $path = $file->store('public/img/notificacao');
            $notificacao->fotoNotificacao = basename($path);
            }

            $notificacao-> save();

            return redirect()->route('index.perfil')->with('success', 'Notificação enviada com sucesso!');

    }
public function update(Request $request, $idnotificacao){

    $request->validate([
        'tituloNotificacao'        => 'required|string|max:35',
        'mensagemNotificacao'      => 'required|string|max:150',
        'statusNotificacao'        => 'required|in:ativo,desativo',
        'fotoNotificacao'          => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ],[
        'tituloNotificacao.max'    => 'O titulo da notificação deve ter no máximo 35 caracteres.',
        'mensagemNotificacao.max'  => 'A mensagem da notificação deve ter no máximo 150 caracteres.',
        'fotoNotificacao.image'    => 'O arquivo deve ser uma imagem.',
        'fotoNotificacao.mimes'    => 'A imagem deve estar em um dos seguintes formatos: jpeg, png, jpg, gif, svg.',
        'fotoNotificacao.max'      => 'A imagem deve ter no máximo 2MB.',
    ]
    );

    $notificacao = Notificacao::findOrFail($idnotificacao);

    $notificacao->update($request->only([
        'idNotificacao',
        'tituloNotificacao',
        'mensagemNotificacao', 
    ]));

             // Atualização da imagem do aluno, se uma nova imagem foi enviada
             if ($request->hasFile('fotoNotificacao')) {
                // Apaga a imagem anterior, se existir
                if ($notificacao->fotoNotificacao) {
                    Storage::delete('public/img/alunos/' . $notificacao->fotoNotificacao);
                }
        
                // Armazena a nova imagem
                $path = $request->file('fotoNotificacao')->store('public/img/notificacao');
                $notificacao->fotoNotificacao = basename($path);
        
                // Salva a alteração da imagem no banco de dados
                $notificacao->save();
            }

            return redirect()->route('index.perfil')->with('success', 'Notificação atualizada com sucesso.');

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
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\Notificacao  $notificacao
     * @return \Illuminate\Http\Response
     */

    // public function update( (Request $request,$idnotificacao)
    // {
    //     //
    // }

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

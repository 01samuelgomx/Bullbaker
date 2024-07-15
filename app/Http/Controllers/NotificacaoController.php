<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use App\Models\Notificacao;
use App\Models\Usuario;
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
        $idnotificacao = session('id');
        $lista = Notificacao::where('statusNotificacao', 'ativo')->get();
    
        return view('site.dashboard.administrativo.perfil.index', compact('lista'));
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
        // Adicionar timestamps ao request
        $request->merge(['created_at' => now(), 'updated_at' => now()]);
    
        // Validação dos campos
        $request->validate([
            'tituloNotificacao' => 'required|string|max:35',
            'mensagemNotificacao' => 'required|string|max:150',
            'statusNotificacao' => 'required|in:ativo,desativo',
            'fotoNotificacao' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'tituloNotificacao.required' => 'O título da notificação é obrigatório.',
            'tituloNotificacao.max' => 'O título da notificação deve ter no máximo 35 caracteres.',
            'mensagemNotificacao.required' => 'A mensagem da notificação é obrigatória.',
            'mensagemNotificacao.max' => 'A mensagem da notificação deve ter no máximo 150 caracteres.',
            'statusNotificacao.required' => 'O status da notificação é obrigatório.',
            'statusNotificacao.in' => 'O status da notificação deve ser "ativo" ou "desativo".',
            'fotoNotificacao.required' => 'A imagem da notificação é obrigatória.',
            'fotoNotificacao.image' => 'O arquivo deve ser uma imagem.',
            'fotoNotificacao.mimes' => 'A imagem deve estar em um dos seguintes formatos: jpeg, png, jpg, gif, svg.',
            'fotoNotificacao.max' => 'A imagem deve ter no máximo 2MB.',
        ]);
    
        // Instanciar uma nova notificação
        $notificacao = new Notificacao();
    
        // Preencher os campos da notificação
        $notificacao->tituloNotificacao = $request->input('tituloNotificacao');
        $notificacao->mensagemNotificacao = $request->input('mensagemNotificacao');
        $notificacao->statusNotificacao = $request->input('statusNotificacao');
    
        // Upload da imagem
        if ($request->hasFile('fotoNotificacao') && $request->file('fotoNotificacao')->isValid()) {
            $file = $request->file('fotoNotificacao');
            $path = $file->store('public/img/notificacao');
            $notificacao->fotoNotificacao = basename($path);
        }
    
        // Salvar a notificação no banco de dados
        $notificacao->save();
    
        // Redirecionar com mensagem de sucesso
        return redirect()->route('index.perfil')->with('success', 'Notificação enviada com sucesso!');
    }
    


        public function update(Request $request, $idnotificacao){

            $request->validate([
                'tituloNotificacao'        => 'required|string|max:35',
                'mensagemNotificacao'      => 'required|string|max:150',
                'statusNotificacao'        => 'required|in:ativo,desativo',
                'fotoNotificacao'          => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],[
                'tituloNotificacao.max'    => 'O título da notificação deve ter no máximo 35 caracteres.',
                'mensagemNotificacao.max'  => 'A mensagem da notificação deve ter no máximo 150 caracteres.',
                'statusNotificacao.in'     => 'O status da notificação deve ser "ativo" ou "desativo".',
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
                'statusNotificacao',
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
    public function edit($id)
    {
      $idnotificacao = session('id');
             
      if (!$idnotificacao) {
          return redirect()->route('login')->withErrors(['msg' => 'Sessão expirada, faça login novamente.']);
      }

      $notificacao = Notificacao::find($idnotificacao);
      $editNotificacao = Notificacao::findOrFail($id);
  
      return view('site.dashboard.administrativo.perfil.edit', compact('notificacao', 'editNotificacao'));
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
    public function destroy($id)
    {
        $editNotificacao = Notificacao::findOrFail($id);
        $editNotificacao ->update(['statusNotificacao' => 'desativo']);
         
        return redirect()->route('index.perfil')->with('success', 'Notificacao desativada com sucesso.');
    }
}

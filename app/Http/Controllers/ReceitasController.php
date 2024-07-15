<?php

namespace App\Http\Controllers;

use App\Models\Receitas;
use App\Http\Controllers\Controller;
use App\Models\Administrador;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ReceitasController extends Controller
{

    public $receita;
    public $idReceita;

    public function __construct(Receitas $receita) {
        $this -> receita = $receita;
    }
    /**
     * @return HttpResponse
     */

     public function create()
     {
         return view('site.dashboard.administrativo.receitas.create',);
     }

    /**
     * @return Response
     */
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

       $lista = Receitas::where('statusReceita', 'ativo')->get();

       //-----------------------
       // Listar Views

       // Contar Alunos
       $result = DB::table('vw_alunos_ativos')->first();
       if ($result) {
           $num_alunos_ativos = $result->num_alunos_ativos;
       } else {
           $num_alunos_ativos = 0;
       }

       // Contar Cursos
       $result = DB::table('vw_cursos_ativos')->first();
       if ($result) {
           $num_cursos_ativos = $result->num_cursos_ativos;
       } else {
           $num_cursos_ativos = 0;
       }

       // Contar Aulas
       $result = DB::table('vw_aulas_ativas')->first();
       if ($result) {
           $num_aulas_ativas = $result->num_aulas_ativas;
       } else {
           $num_aulas_ativas = 0;
       }


       // Retornar a view com os dados necessários
       return view('site.dashboard.administrativo.receitas.index', compact( 'administrador', 'lista', 'num_alunos_ativos', 'num_cursos_ativos', 'num_aulas_ativas'));
   }

      /**
     * @param Receitas  $receita
     * @return Response
     */
    public function edit($id)
    {
        $idReceita = session('id');
        
        $receita = Receitas::find($idReceita);
        $editReceita = Receitas::findOrFail($id);

        return view('site.dashboard.administrativo.receitas.edit', compact('receita','editReceita'));
    }

    /**
     * @param  \App\Http\Requests\StoreReceitasRequest  $request
     * @return Response
     */
    
    public function cadReceita(Request $request)
    {
        $request->merge(['created_at' => now()]);
        $request->merge(['updated_at' => now()]);

        $request->validate([

            'idReceita'          => 'required|integer|unique:tblreceitas,idReceita',
            'nomeReceita'        => 'required|string|max:35',
            'ingredienteReceita' => 'required|string|max:550',
            'modoPreparoReceita' => 'required|string|max:750',
            'fotoReceita'        => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'statusReceita'      => 'required|in:ativo,inativo',
            'created_at'         => 'required|date',
            'updated_at'         => 'required|date',

        ],[

            'idReceita.required' => 'O campo ID da Receita é obrigatório.',
            'idReceita.integer' => 'O campo ID da Receita deve ser um número inteiro.',
            'idReceita.unique' => 'O campo ID da Receita deve ser único.',
    
            'nomeReceita.required' => 'O campo Nome da Receita é obrigatório.',
            'nomeReceita.string' => 'O campo Nome da Receita deve ser um texto.',
            'nomeReceita.max' => 'O campo Nome da Receita deve ter no máximo 35 caracteres.',
    
            'ingredienteReceita.required' => 'O campo Ingredientes da Receita é obrigatório.',
            'ingredienteReceita.string' => 'O campo Ingredientes da Receita deve ser uma texto.',
            'ingredienteReceita.max' => 'O campo Ingredientes da Receita deve ter no máximo 550 caracteres.',
    
            'modoPreparoReceita.required' => 'O campo modo de Preparo da Receita é obrigatório.',
            'modoPreparoReceita.string' => 'O campo modo de Preparo da Receita deve ser um texto.',
            'modoPreparoReceita.max' => 'O campo modo de Preparo da Receita  deve ter no máximo 750 caracteres.',
    
            'fotoReceita.image' => 'O campo Foto da Receita deve ser uma imagem.',
            'fotoReceita.mimes' => 'A imagem da Receita deve estar em um dos seguintes formatos: jpeg, png, jpg, gif, svg.',
            'fotoReceita.max' => 'A imagem da Receita deve ter no máximo 2MB.',
    
            'statusReceita.required' => 'O campo Status da Receita é obrigatório.',
            'statusReceita.in' => 'O campo Status da Receita deve ser "ativo" ou "inativo".',
    
            'created_at.required' => 'O campo Data de Criação é obrigatório.',
            'created_at.date' => 'O campo Data de Criação deve ser uma data válida.',
    
            'updated_at.required' => 'O campo Data de Atualização é obrigatório.',
            'updated_at.date' => 'O campo Data de Atualização deve ser uma data válida.',

        ]);

        $receita = New Receitas();

        $receita->nomeReceita          =$request->input('nomeReceita');
        $receita->ingredienteReceita   =$request->input('ingredienteReceita');
        $receita->modoPreparoReceita   =$request->input('modoPreparoReceita');
        $receita->statusReceita        =$request->input('statusReceita');

        if ($request->hasFile('fotoReceita') && $request->file('fotoReceita')->isValid()) {
            $file = $request->file('fotoReceita');
            $path = $file->store('public/img/receitas');
            $receita->fotoReceita = basename($path);
        }
        $receita->save();

        return redirect()->route('index.receita')->with('success','Receita cadastrada com sucesso');
    }

    /**
     * @param Integer  $receita
     * @return Response
     */
    
    public function show(Receitas $receita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateReceitasRequest  $request
     * @param Receitas  $receita
     * @return Response
     */
    public function update(Request $request, $idreceita)
    {
        $request->validate([
            'idReceita'          => 'required|integer|unique:tblreceitas,idReceita',
            'nomeReceita'        => 'required|string|max:35',
            'ingredienteReceita' => 'required|string|max:550',
            'modoPreparoReceita' => 'required|string|max:750',
            'fotoReceita'        => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'statusReceita'      => 'required|in:ativo,inativo',
            'created_at'         => 'required|date',
            'updated_at'         => 'required|date',
    
        ],[
           'idReceita.required' => 'O campo ID da Receita é obrigatório.',
        'idReceita.integer' => 'O campo ID da Receita deve ser um número inteiro.',
        'idReceita.unique' => 'O campo ID da Receita deve ser único.',

        'nomeReceita.required' => 'O campo Nome da Receita é obrigatório.',
        'nomeReceita.string' => 'O campo Nome da Receita deve ser um texto.',
        'nomeReceita.max' => 'O campo Nome da Receita deve ter no máximo 35 caracteres.',

        'ingredienteReceita.required' => 'O campo Ingredientes da Receita é obrigatório.',
        'ingredienteReceita.string' => 'O campo Ingredientes da Receita deve ser uma texto.',
        'ingredienteReceita.max' => 'O campo Ingredientes da Receita deve ter no máximo 550 caracteres.',

        'modoPreparoReceita.required' => 'O campo modo de Preparo da Receita é obrigatório.',
        'modoPreparoReceita.string' => 'O campo modo de Preparo da Receita deve ser um texto.',
        'modoPreparoReceita.max' => 'O campo modo de Preparo da Receita  deve ter no máximo 750 caracteres.',

        'fotoReceita.image' => 'O campo Foto da Receita deve ser uma imagem.',
        'fotoReceita.mimes' => 'A imagem da Receita deve estar em um dos seguintes formatos: jpeg, png, jpg, gif, svg.',
        'fotoReceita.max' => 'A imagem da Receita deve ter no máximo 2MB.',

        'statusReceita.required' => 'O campo Status da Receita é obrigatório.',
        'statusReceita.in' => 'O campo Status da Receita deve ser "ativo" ou "inativo".',

        'created_at.required' => 'O campo Data de Criação é obrigatório.',
        'created_at.date' => 'O campo Data de Criação deve ser uma data válida.',

        'updated_at.required' => 'O campo Data de Atualização é obrigatório.',
        'updated_at.date' => 'O campo Data de Atualização deve ser uma data válida.',
        ]);

        $receita = Receitas::findOrFail($idreceita);

        $receita->update($request->only([
            'idReceita', 
            'nomeReceita', 
            'ingredienteReceita',
            'modoPreparoReceita',
            'fotoReceita',
            'statusReceita',
        ]));

          // Atualização da imagem do aluno, se uma nova imagem foi enviada
          if ($request->hasFile('fotoReceita')) {
            // Apaga a imagem anterior, se existir
            if ($receita->fotoReceita) {
                Storage::delete('public/img/receitas/' . $receita->fotoReceita);
            }
    
            // Armazena a nova imagem
            $path = $request->file('fotoReceita')->store('public/img/receitas');
            $receita->fotoReceita = basename($path);
    
            // Salva a alteração da imagem no banco de dados
            $receita->save();
        }

        return redirect()->route('index.receita')->with('success', 'Receita atualizada com sucesso.');
    }

    /**
     * @param Receitas  
     * @return Response
     */

    public function destroy($id)
    {
        $editReceita = Receitas::findOrFail($id);
        $editReceita ->update(['statusReceita' => 'desativo']);
 
        return redirect()->route('index.receita')->with('success', 'Receita desativada com sucesso.');
    }
}

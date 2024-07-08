<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Aluno;
use Illuminate\Http\Request;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class AlunoController extends Controller
{

    // -------------------------------
    // Listar Aluno

    public function home($idAluno)
    {
        // Tela Home

        $aluno = Aluno::findOrFail($idAluno);
        //   dd($idAluno);
        if (!$aluno) {
            abort(404, 'aluno não encontrado');
        }

        // dd('teste');

        return response()->json([
            'dadosAluno' => [

                'idAluno'              => $aluno->idAluno,
                'nome'                 => $aluno->nomeAluno,
                'email'                => $aluno->emailAluno,
                'telefone'             => $aluno->telefoneAluno,
                'dataCadastro'         => $aluno->dataCadAluno,
                'habilidade'           => $aluno->nivelHabilidade,
                'estado'               => $aluno->estadoAluno,
                'nomeCurso'            => $aluno->nomeCurso,
                'idCurso'              => $aluno->idCurso,
                'dataDeNascimento'     => $aluno->dataDeNascimento,
                'objetivo'             => $aluno->objetivo,
                'status'               => $aluno->statusAluno,
                'foto'                 => $aluno->fotoAluno,
                
            ]
        ]);
    }

    public function perfil($idAluno)
    {
        // Tela Perfil

        $aluno = Aluno::findOrFail($idAluno);
        //   dd($idAluno);
        if (!$aluno) {
            abort(404, 'aluno não encontrado');
        }

        // dd('teste');

        return response()->json([
            'dadosAluno' => [

                'idAluno'              => $aluno->idAluno,
                'nome'                 => $aluno->nomeAluno,
                'email'                => $aluno->emailAluno,
                'telefone'             => $aluno->telefoneAluno,
                'dataCadastro'         => $aluno->dataCadAluno,
                'habilidade'           => $aluno->nivelHabilidade,
                'estado'               => $aluno->estadoAluno,
                'nomeCurso'            => $aluno->nomeCurso,
                'idCurso'              => $aluno->idCurso,
                'dataDeNascimento'     => $aluno->dataDeNascimento,
                'objetivo'             => $aluno->objetivo,
                'status'               => $aluno->statusAluno,
                'foto'                 => $aluno->fotoAluno,
            ]
        ]);

    }




    public function index()
    {


    }

    /**
     * @return Response
     */

    // -------------------------------
    // Rotas Dos Formulario
    // ------------------------------

    public function create()
    {

    }


        /**
         * @return Response
         */

        // -------------------------------
        // Editar Aluno

         public function edit($id)
         {

         }


    // -------------------------------
    // Croud STORE
    // ------------------------------

    public function store(Request $request)
    {

    }

    // -------------------------------
    // Cadastro Aluno

    public function cadAluno (Request $request)
    {

    }

    /**
     * @param  Integer
     * @return Response
     */

    public function show($id){


    }

    /**
     * @param  Request
     * @param  Aluno
     * @return Response
     */

     // -------------------------------
     // Cadastro Aluno

     public function update(Request $request, $idAluno)
     {
         $request->validate([
             'nomeAluno' => 'required|min:3|unique:tblaluno,nomeAluno,' . $idAluno . ',idAluno',
             'emailAluno' => 'required|email|unique:tblaluno,emailAluno,' . $idAluno . ',idAluno',
             'telefoneAluno' => 'required|min:10|unique:tblaluno,telefoneAluno,' . $idAluno . ',idAluno',
             'dataCadAluno' => 'required|date',
             'nivelHabilidade' => 'required|string|max:255',
             'estadoAluno' => 'required|string|max:255',
             'nomeCurso' => 'required|string|max:255',
             'dataDeNascimento' => 'required|date',
             'objetivo' => 'nullable|string',
             'statusAluno' => 'required|in:ativo,desativo',
             'fotoAluno' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
             'idCurso' => 'required|exists:tblcurso,idCurso',
         ]);
     
         $aluno = Aluno::findOrFail($idAluno);
     
         if ($request->hasFile('fotoAluno')) {
             $fotoPath = $request->file('fotoAluno')->store('img/aluno', 'public');
             $fotoUrl = url('storage/' . $fotoPath);
             $aluno->fotoAluno = $fotoUrl;
         }
     
         $aluno->update($request->only([
             'nomeAluno',
             'emailAluno',
             'telefoneAluno',
             'dataCadAluno',
             'nivelHabilidade',
             'estadoAluno',
             'nomeCurso',
             'idCurso',
             'dataDeNascimento',
             'objetivo',
             'statusAluno',
         ]));
     
         if (isset($fotoUrl)) {
             $aluno->fotoAluno = $fotoUrl;
         }
     
         $aluno->save();
     
         return response()->json([
             'message' => 'Aluno atualizado com sucesso',
             'aluno' => $aluno,
         ]);
     }
     

    /**
     * @param  Aluno
     * @return Response
     */

    // -------------------------------
    // Delete Aluno

    public function destroy($id)
    {

    }


}

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

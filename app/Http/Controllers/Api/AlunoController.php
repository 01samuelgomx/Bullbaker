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

    public function fotoAluno(Request $request, $idAluno)
    {
        $aluno = Aluno::find($idAluno);

        if (!$aluno) {
            return response()->json(['error' => 'Aluno não encontrado'], 404);
        }

        // Retornar apenas a foto do aluno
        return response()->json(['fotoAluno' => $aluno->fotoAluno]);
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
        $request-> validate([
            'nomeAluno'         => 'required|unique:tblaluno,nomeAluno|min:3',
            'emailAluno'        => 'required|unique:tblaluno,emailAluno|email',
            'telefoneAluno'     => 'required|unique:tblaluno,telefoneAluno|min:10',
            'dataCadAluno'      => 'required|date',
            'nivelHabilidade'   => 'required|string|max:255',
            'estadoAluno'       => 'required|string|max:255',
            'nomeCurso'         => 'required|string|max:255',
            'dataDeNascimento'  => 'required|date',
            'objetivo'          => 'nullable|string',
            'statusAluno'       => 'required|in:ativo,desativo',
            'fotoAluno'         => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'idCurso'           => 'required|exists:tblcurso,idCurso',

        ]);

        $aluno = Aluno::findOrFail($idAluno);

        $aluno->update($request->only([
            'idAluno',
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
            'fotoAluno',
        ]));

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

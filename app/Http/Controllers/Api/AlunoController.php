<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Aluno;
use Illuminate\Http\Request;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


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
                'foto'                 => url('storage/img/alunos/' . $aluno->fotoAluno), // Aqui é onde a URL da imagem é gerada

            ]

      
            
        ]);
    }

    public function perfil($idAluno)
    {
        // Tela Perfil
    
        $aluno = Aluno::findOrFail($idAluno);
    
        if (!$aluno) {
            abort(404, 'Aluno não encontrado');
        }
    
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
                'foto'                 => url('storage/img/alunos/' . $aluno->fotoAluno), // Aqui é onde a URL da imagem é gerada
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
     // Atualização Aluno

public function update(Request $request, $idAluno)
{
    $request->validate([
        'nomeAluno' => 'min:3|unique:tblaluno,nomeAluno,' . $idAluno . ',idAluno',
        'emailAluno' => 'email|unique:tblaluno,emailAluno,' . $idAluno . ',idAluno',
        'telefoneAluno' => 'min:10|unique:tblaluno,telefoneAluno,' . $idAluno . ',idAluno',
        'dataCadAluno' => 'date',
        'nivelHabilidade' => 'string|max:255',
        'estadoAluno' => 'string|max:255',
        'nomeCurso' => 'string|max:255',
        'dataDeNascimento' => 'date',
        'objetivo' => 'nullable|string',
        'statusAluno' => 'in:ativo,desativo',
        'fotoAluno' => 'nullable', 
        'idCurso' => 'exists:tblcurso,idCurso',
    ]);

    $aluno = Aluno::findOrFail($idAluno);

    if ($request->has('fotoAluno')) {
        $base64Image = $request->input('fotoAluno');
        $image = str_replace('data:image/jpeg;base64,', '', $base64Image);
        $image = str_replace(' ', '+', $image);
        $imageName = 'img/alunos/' . uniqid() . '.jpg';

        // Deletar a foto antiga
        if ($aluno->fotoAluno) {
            $oldPath = str_replace(url('storage') . '/', '', $aluno->fotoAluno);
            Storage::disk('public')->delete($oldPath);
        }

        // Armazenar a nova imagem
        Storage::disk('public')->put($imageName, base64_decode($image));
        $fotoUrl = url('storage/' . $imageName);
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

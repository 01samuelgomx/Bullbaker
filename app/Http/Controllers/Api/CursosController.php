<?php

namespace App\Http\Controllers\Api;

use App\Models\Cursos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    public $curso;
    public $idCurso;

    public function __construct(Cursos $curso) {
        $this -> curso = $curso;
    }
    /**
     * @return \Illuminate\Http\Response
     */

     public function listarCursos()
     {
         $cursosAtivos = Cursos::where('statusCurso', 'ativo')->get()->map(function($curso) {
             $curso->fotoCurso = url('storage/img/cursos/' . $curso->fotoCurso);
             return $curso;
         });
     
         return response()->json([
             'cursosAtivos' => $cursosAtivos
         ]);
     }

     
    

    //  public function listarCursos($idCurso)
    //  {
    //      // Filtra somente os cursos ativos
    //      $cursosAtivos = Cursos::where('statusCurso', 'ativo')->get();
         
    //      // Busca o curso específico pelo ID da rota
    //      $curso = Cursos::find($idCurso);
     
    //      // Verifica se o curso foi encontrado
    //      if (!$curso) {
    //          return response()->json(['error' => 'Curso não encontrado'], 404);
    //      }
     
    //      // Retorna o curso específico e a lista de cursos ativos em formato JSON
    //      return response()->json([
    //          'dadosCurso' => [
    //              'nome'             => $curso->nomeCurso,
    //              'descricao'        => $curso->descricaoCurso,
    //              'preco'            => $curso->precoCurso,
    //              'vagas'            => $curso->vagasDisponiveisCurso,
    //              'aprendeDescriCursos' => $curso->aprendeDescriCursos,
    //              'tituloUm'         => $curso->tituloUmCurso,
    //              'descrium'         => $curso->descriumCurso,
    //              'tituloDois'       => $curso->tituloDoisCurso,
    //              'descriDois'       => $curso->descriDoisCurso,
    //              'tituloTres'       => $curso->tituloTresCurso,
    //              'descriTres'       => $curso->descriTresCurso,
    //              'foto'             => $curso->fotoCurso,
    //              'status'           => $curso->statusCurso,
    //          ],
    //          'cursosAtivos' => $cursosAtivos
    //      ]);
    //  }
     
     
    


    /**
     * Show the form for cursoseating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly cursoseated resource in storage.
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
     * @param  \App\Models\Cursos  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(Cursos $curso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cursos  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit(Cursos $curso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cursos  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cursos $curso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cursos  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cursos $curso)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Models\Cursos;
use App\Http\Controllers\Controller;
use App\Models\Aula;
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

     
     public function saibaMais($idCurso)
     {
         $curso = Cursos::where('idCurso', $idCurso)->first();
         
         if ($curso) {
             $curso->fotoCurso = url('storage/img/cursos/' . $curso->fotoCurso);
             return response()->json($curso);
            } else {
                return response()->json(['message' => 'Curso não encontrado'], 404);
            }
            
        }


        public function aula($idCurso)
        {
            $aulas = Aula::where('idCurso', $idCurso)->get();
        
            if ($aulas) {
                foreach ($aulas as $aula) {
                    $aula->fotoAula = url('storage/img/aulas/' . $aula->fotoAula);
                }
                return response()->json($aulas);
            }
        
            return response()->json($aulas);
        }        
 
        
        //     'nome'                => $curso->nomeCurso,
        //     'descricao'           => $curso->descricaoCurso,
        //     'preco'               => $curso->precoCurso,
        //     'vagas'               => $curso->vagasDisponiveisCurso,
        //     'aprendeDescriCursos' => $curso->aprendeDescriCursos,
        //     'tituloUm'            => $curso->tituloUmCurso,
        //     'descrium'            => $curso->descriumCurso,
        //     'tituloDois'          => $curso->tituloDoisCurso,
        //     'descriDois'          => $curso->descriDoisCurso,
        //     'tituloTres'          => $curso->tituloTresCurso,
        //     'descriTres'          => $curso->descriTresCurso,
        //     'foto'                => $curso->fotoCurso,
        //     'status'              => $curso->statusCurso,

    /**
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
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

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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($curso)
    {
        $idCurso = session('id');
        // dd($idCurso);
        $curso = Cursos::find($idCurso);
        
        // Filtra somente os cursos ativos
        $lista = Cursos::where('statusCurso', 'ativo')->get();
        
        // dd($curso->fotoCurso); 
        
        if (!$curso) {
            abort(404, 'Curso não encontrado');
        }
       
        return response()->json([
            'dadosCurso' => [
                'nome'                 => $curso->nomeCurso,
                'descriscao'           => $curso->descricaoCurso,
                'preco'                => $curso->precoCurso,
                'vagas'                => $curso->vagasDisponiveisCurso,
                'aprende'              => $curso->aprendeDescriCursos,
                'tituloUm'             => $curso->tituloUmCurso,
                'descrium'             => $curso->descriumCurso,
                'tituloDois'           => $curso->tituloDoisCurso,
                'descriDois'           => $curso->descriDois,
                'tituloTres'           => $curso->tituloTresCurso,
                'descriTresCurso'      => $curso->descriTresCurso,
                'foto'                 => $curso->fotoCurso,
                'status'               => $curso->statusCurso,
            ],
            'cursosAtivos' => $lista  // Adicionando a lista de cursos ativos ao JSON de resposta
        ]);
    }
    

    /**
     * Show the form for cursoseating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cursoseate()
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

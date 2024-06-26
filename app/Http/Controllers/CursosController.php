<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use App\Models\Cursos;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class CursosController extends Controller
{
    public $curso;
    public $idCurso;

    public function __construct(Cursos $curso) {
        $this -> curso = $curso;
    }
    /**
     * @return Response
     */

    // -------------------------------
    // Create curso
    public function create()
    {
        return view('site.dashboard.administrativo.cursos.create', //compact('curso')
    );
   }

    /**
     * @return Response
     */

    // -------------------------------
    // Listar curso
    
    public function index()
    {
        $idCurso = session('id');
        // dd($idCurso);
        $curso = Cursos::find($idCurso);
        
        // Filtra somente os cursos ativos
        $lista = Cursos::where('statusCurso', 'ativo')->get();
        
        // dd($curso->fotoCurso); 
        
        if (!$curso) {
            abort(404, 'curso não encontrado');
        }


        // Busca o administrador com base no ID da sessão ou outro critério adequado
        $idAdministrador = session('id');
        // dd($idAdministrador);
        $administrador = Administrador::find($idAdministrador);
        // dd($administrador);
        if (!$administrador) {
            abort(404, 'Administrador não encontrado');
        }
    

        // -------------------------------
        // Listar Views
        
               // Contar ALunos
               $result = DB::table('vw_alunos_ativos')->first();
            
               // // Verifica se a consulta retornou um resultado
               if ($result) {
               $num_alunos_ativos = $result->num_alunos_ativos;
              } else {
               $num_alunos_ativos = 0;
              }
 
                // Contar Cursos
                 $result = DB::table('vw_cursos_ativos')->first();
                 
                 // // Verifica se a consulta retornou um resultado
                 if ($result) {
                     $num_cursos_ativos = $result->num_cursos_ativos;
                 } else {
                     $num_cursos_ativos = 0;
                 }
 
                // Contar Aulas
                 $result = DB::table('vw_aulas_ativas')->first();
                 
                 // // Verifica se a consulta retornou um resultado
                 if ($result) {
                     $num_aulas_ativas = $result->num_aulas_ativas;
                 } else {
                     $num_aulas_ativas = 0;
                 }
                 
                 // -------------------------------
        // dd($lista);
        return view('site.dashboard.administrativo.cursos.index', compact('administrador','curso','lista','num_alunos_ativos','num_cursos_ativos','num_aulas_ativas'));
    }


         public function edit($id)
         {
             // Pega o ID do curso da sessão
             $idCurso = session('id');
             
             // Se o ID do curso da sessão não estiver definido, redireciona para outra página ou retorna um erro
             
             if (!$idCurso) {
                 return redirect()->route('login')->withErrors(['msg' => 'Sessão expirada, faça login novamente.']);
             }

             // Encontra o curso logado
             $curso = Cursos::find($idCurso);
         
             // Encontra o curso que será editado
             $editCurso = Cursos::findOrFail($id);
         
             // Retorna a view com as variáveis necessárias
             return view('site.dashboard.administrativo.cursos.edit', compact('curso', 'editCurso'));
         }
         
    // -------------------------------
    // Croud STORE
    // ------------------------------

    
    // -------------------------------
    // Cadastro curso

    public function cadcurso(Request $request)
    {
        // Adiciona timestamps automaticamente
        $request->merge(['created_at' => now()]);
        $request->merge(['updated_at' => now()]);

        // Validação dos dados
        $request->validate([
            'nomeCurso'             => 'required|string|max:100',
            'descricaoCurso'        => 'required|string|max:100',
            'duracaoCurso'          => 'required|numeric|min:1',
            'precoCurso'            => 'required|numeric|min:1',
            'vagasDisponiveisCurso' => 'required|numeric|min:1',
            'fotoCurso'             => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'data_inicio'           => 'required|date',
            'data_fim'              => 'required|date|after_or_equal:data_inicio',
            'statusCurso'           => 'required|in:ativo,desativado',
        ],[
            'nomeCurso.required'             => 'O campo nome do curso é obrigatório.',
            'nomeCurso.unique'               => 'Este nome de curso já está em uso.',
            'nomeCurso.min'                  => 'O nome do curso deve ter no mínimo 3 caracteres.',
            'descricaoCurso.required'        => 'O campo descrição é obrigatório.',
            'descricaoCurso.min'             => 'A descrição deve ter no mínimo 10 caracteres.',
            'duracaoCurso.required'          => 'O campo duração é obrigatório.',
            'duracaoCurso.integer'           => 'A duração deve ser um número inteiro.',
            'duracaoCurso.min'               => 'A duração deve ser de pelo menos 1 hora.',
            'precoCurso.required'            => 'O campo preço é obrigatório.',
            'precoCurso.numeric'             => 'O preço deve ser um número.',
            'precoCurso.min'                 => 'O preço deve ser um valor positivo.',
            'vagasDisponiveisCurso.required' => 'O campo vagas disponíveis é obrigatório.',
            'vagasDisponiveisCurso.integer'  => 'O número de vagas deve ser um número inteiro.',
            'vagasDisponiveisCurso.min'      => 'Deve haver pelo menos 1 vaga disponível.',
            'data_inicio.required'           => 'O campo data de início é obrigatório.',
            'data_inicio.date'               => 'A data de início deve ser uma data válida.',
            'data_fim.required'              => 'O campo data de fim é obrigatório.',
            'data_fim.date'                  => 'A data de fim deve ser uma data válida.',
            'data_fim.after_or_equal'        => 'A data de fim deve ser igual ou posterior à data de início.',
            'statusCurso.required'           => 'O campo status é obrigatório.',
            'statusCurso.in'                 => 'O status deve ser "ativo" ou "inativo".',
         ]
        );

        $curso = new Cursos();

        $curso->nomeCurso             = $request->input('nomeCurso');
        $curso->descricaoCurso        = $request->input('descricaoCurso');
        $curso->duracaoCurso          = $request->input('duracaoCurso');
        $curso->precoCurso            = $request->input('precoCurso');
        $curso->vagasDisponiveisCurso = $request->input('vagasDisponiveisCurso');

        // Upload da imagem
        if ($request->hasFile('fotoCurso') && $request->file('fotoCurso')->isValid()) {
            $file = $request->file('fotoCurso');
            $path = $file->store('public/img/cursos');
            $curso->fotoCurso = basename($path);
        }

        $curso->data_inicio = $request->input('data_inicio');
        $curso->data_fim    = $request->input('data_fim');
        $curso->statusCurso = $request->input('statusCurso');

        $curso->save();

        return redirect()->route('index.curso')->with('success', 'Curso adicionado com sucesso!');
    }
    

    /**
     * @param  Integer
     * @return Response
     */

    
    /**
     * @param  Request 
     * @param  Cursos 
     * @return Response
     */

     // -------------------------------
     // Cadastro curso

     public function update(Request $request, $idCurso)
     {
         // Validação dos dados recebidos
         $request->validate([
             'nomeCurso'             => 'required|string|max:100',
             'descricaoCurso'        => 'required|string|max:100',
             'duracaoCurso'          => 'required|numeric|min:1',
             'precoCurso'            => 'required|numeric|min:1',
             'vagasDisponiveisCurso' => 'required|numeric|min:1',
             'fotoCurso'             => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
             'data_inicio'           => 'required|date',
             'data_fim'              => 'required|date|after_or_equal:data_inicio',
             'statusCurso'           => 'required|in:ativo,desativo',
         ],[
            'nomeCurso.required'             => 'O campo nome do curso é obrigatório.',
            'nomeCurso.unique'               => 'Este nome de curso já está em uso.',
            'nomeCurso.min'                  => 'O nome do curso deve ter no mínimo 3 caracteres.',
            'descricaoCurso.required'        => 'O campo descrição é obrigatório.',
            'descricaoCurso.min'             => 'A descrição deve ter no mínimo 10 caracteres.',
            'duracaoCurso.required'          => 'O campo duração é obrigatório.',
            'duracaoCurso.integer'           => 'A duração deve ser um número inteiro.',
            'duracaoCurso.min'               => 'A duração deve ser de pelo menos 1 hora.',
            'precoCurso.required'            => 'O campo preço é obrigatório.',
            'precoCurso.numeric'             => 'O preço deve ser um número.',
            'precoCurso.min'                 => 'O preço deve ser um valor positivo.',
            'vagasDisponiveisCurso.required' => 'O campo vagas disponíveis é obrigatório.',
            'vagasDisponiveisCurso.integer'  => 'O número de vagas deve ser um número inteiro.',
            'vagasDisponiveisCurso.min'      => 'Deve haver pelo menos 1 vaga disponível.',
            'data_inicio.required'           => 'O campo data de início é obrigatório.',
            'data_inicio.date'               => 'A data de início deve ser uma data válida.',
            'data_fim.required'              => 'O campo data de fim é obrigatório.',
            'data_fim.date'                  => 'A data de fim deve ser uma data válida.',
            'data_fim.after_or_equal'        => 'A data de fim deve ser igual ou posterior à data de início.',
            'statusCurso.required'           => 'O campo status é obrigatório.',
            'statusCurso.in'                 => 'O status deve ser "ativo" ou "inativo".',
         ]
        );
     
         // Busca do curso pelo ID
         $curso = Cursos::findOrFail($idCurso);
     
         // Atualização dos dados do curso
         $curso->update($request->only([
             'nomeCurso',
             'descricaoCurso',
             'duracaoCurso',
             'precoCurso',
             'vagasDisponiveisCurso',
             'data_inicio',
             'data_fim',
             'statusCurso',
         ]));
     
         // Atualização da imagem do curso, se uma nova imagem foi enviada
         if ($request->hasFile('fotoCurso')) {
             // Apaga a imagem anterior, se existir
             if ($curso->fotoCurso) {
                 Storage::delete('public/img/cursos/' . $curso->fotoCurso);
             }
     
             // Armazena a nova imagem
             $path = $request->file('fotoCurso')->store('public/img/cursos');
             $curso->fotoCurso = basename($path);
     
             // Salva a alteração da imagem no banco de dados
             $curso->save();
         }
     
         // Redirecionamento com mensagem de sucesso
         return redirect()->route('index.curso')->with('success', 'Curso atualizado com sucesso.');
     }
     
     

    /**
     * @param  Cursos
     * @return Response
     */

    // -----------------------
    // Delete curso

    public function destroy($id)
    {
        $editCurso = Cursos::findOrFail($id);
        $editCurso ->update(['statusCurso' => 'desativo']);
         
        return redirect()->route('index.curso')->with('success', 'curso desativado com sucesso.');
     }

}

<?php

namespace App\Http\Controllers;
use App\Models\Cursos;
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
        
        // dd($lista); 
        
        if (!$curso) {
            abort(404, 'curso não encontrado');
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
        return view('site.dashboard.administrativo.cursos.index', compact('curso','lista','num_alunos_ativos','num_cursos_ativos','num_aulas_ativas'));
    }


    
        /**
         * @return Response
         */
    
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

    public function store(Request $request)
    {
        $request -> validate($this->curso->Regras(), $this->curso->Feedback());
        $imagem = $request -> file('foto');
        $imagem_url = $imagem -> store('imagem', 'public');

        $cursos = $this->curso->create([

            'nome' => $request-> nome,
            'foto' => $imagem_url,
        ]);

        return response()->json($cursos, 200);
    }
    
    // -------------------------------
    // Cadastro curso

    public function cadcurso (Request $request)
    {
        $request->merge(['create_at' => now()]);
        $request->merge(['updated_at' => now()]);

        $request->validate([

            'nomeCurso'             => 'required|string|max:100',
            'descricaoCurso'        => 'required|string|max:140',
            'duracaoCurso'          => 'nullable|numeric|min:1',
            'precoCurso'            => 'required|numeric|min:0',
            'vagasDisponiveisCurso' => 'required|numeric|min:1',
            // 'fotoCurso'             => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'data_inicio'           => 'required|date',
            'data_fim'              => 'required|date|after_or_equal:data_inicio',
            'statusCurso'           => 'required|in:ativo,desativo',

        ]);
        // dd('teste');

        $curso = new Cursos();

        $curso->nomeCurso                 = $request->input('nomeCurso');
        $curso->descricaoCurso            = $request->input('descricaoCurso');
        $curso->duracaoCurso              = $request->input('duracaoCurso');
        $curso->precoCurso                = $request->input('precoCurso');
        $curso->vagasDisponiveisCurso     = $request->input('vagasDisponiveisCurso');
        // $curso->fotocurso                 = $request->input('fotocurso');
        $curso->data_inicio               = $request->input('data_inicio');
        $curso->data_fim                  = $request->input('data_fim');
        $curso->statusCurso               = $request->input('statusCurso');
        $curso->create_at                 = $request->input('create_at');
        $curso->updated_at                = $request->input('updated_at');
        
        // dd($curso->nomeCurso);
        $curso->save();


        return redirect()->route('index.curso')->with('success', 'Curso adicionado com sucesso!');
    }

    /**
     * @param  Integer
     * @return Response
     */

            public function show($id){
            }
        
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
            // 'fotoCurso'             => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'data_inicio'           => 'required|date',
            'data_fim'              => 'required|date|after_or_equal:data_inicio',
            'statusCurso'           => 'required|in:ativo,desativo',

        ]);
    
        // Busca do curso pelo ID
        $curso = Cursos::findOrFail($idCurso);
    
        // Atualização dos dados do curso
        $curso->update($request->only([
            'idCurso',
            'nomeCurso',
            'descricaoCurso',
            'duracaoCurso',
            'precoCurso',
            'vagasDisponiveisCurso',
            'fotoCurso',
            'data_inicio',
            'data_fim',
            'statusCurso',
        ]));
    
        // Redirecionamento com mensagem de sucesso
        return redirect()->route('index.curso')->with('success', 'curso atualizado com sucesso.');
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
        
       return redirect()->route('index.curso')->with('success', 'Curso desativado com sucesso.');
    }

}

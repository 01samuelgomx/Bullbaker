<?php

namespace App\Http\Controllers;

use App\Models\Cursos;
use Illuminate\Http\Request;
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
    // Rotas Dos Formulario 
    // ------------------------------
    
    public function create()
    {
        return view('site.dashboard.administrativo.cursos.create', //compact('curso')
        );
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
        // dd($lista);
        return view('site.dashboard.administrativo.cursos.index', compact('curso','lista'));
    }
    
    // -------------------------------



    // -------------------------------
    // Cadastro curso

    public function cadcurso (Request $request)
    {
        $request->merge(['create_at' => now()]);
        $request->merge(['updated_at' => now()]);

        $request->validate([

            'nomeCurso'       => 'required|string|max:100',
            'descricaoCurso' => 'required|min:10',
            'duracaoCurso' => 'required|integer|min:1',
            'precoCurso' => 'required|numeric|min:0',
            'vagasDisponiveisCurso' => 'required|integer|min:1',
            // 'fotoCurso' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date|after_or_equal:data_inicio',
            'statusCurso' => 'required|in:ativo,inativo',
        ]);

        $curso = new Cursos();

        $curso->nomeCurso       = $request->input('nomeCurso');
        $curso->descricaoCurso      = $request->input('descricaoCurso');
        $curso->duracaoCurso   = $request->input('duracaoCurso');
        $curso->dataCadcurso    = $request->input('dataCadcurso');
        // $curso->fotocurso       = $request->input('fotocurso');
        $curso->vagasDisponiveisCurso     = $request->input('vagasDisponiveisCurso');
        $curso->idCurso         = $request->input('idCurso');
        $curso->data_inicio      = $request->input('data_inicio');
        $curso->data_fim      = $request->input('data_fim');
        $curso->create_at      = $request->input('create_at');
        $curso->updated_at      = $request->input('updated_at');

        $curso->save();

        return redirect()->route('index.curso')->with('success', 'curso adicionado com sucesso!');
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
            'nomeCurso'       => 'required|string|max:100',
            'descricaoCurso' => 'required|min:10',
            'duracaoCurso' => 'required|integer|min:1',
            'precoCurso' => 'required|numeric|min:0',
            'vagasDisponiveisCurso' => 'required|integer|min:1',
            // 'fotoCurso' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date|after_or_equal:data_inicio',
            'statusCurso' => 'required|in:ativo,inativo',
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
        return redirect()->route('index.curso')
                         ->with('success', 'curso atualizado com sucesso.');
    }

    /**
     * @param  Cursos
     * @return Response
     */

    // -----------------------
    // Delete curso

    public function destroy($id)
    {
        // Busca do curso pelo ID
        $curso = Cursos::find($id);

    if ($curso === null) {
        return response()->json(['erro' => 'Impossível desativar este registro. O curso não existe!'], 404);
        }
        
        // Atualiza o status do curso para 'desativo'
        $curso->statuscurso = 'desativo';
        $curso->save();
        
        return response()->json(['msg' => 'O status do aluno foi atualizado para desativo com sucesso'], 200);
        }
        
        // public function destroy($id)
        // {
        //     $cursos = $this -> aluno -> find($id);
    
        //     if($cursos === null){
        //         return response()->json(['erro' => 'Impossível deleter este registro. O aluno não existe!'], 404);
        //     }
    
        //     Storage::disk('public')->delete($cursos->foto);
        //     $cursos->delete();
        //     return response()->json(['msg' => 'O registro foi removido com sucesso'], 200);
        // }
    
}

<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class AlunoController extends Controller
{
    public $aluno;
    public $idAluno;

    public function __construct(Aluno $aluno) {
        $this -> aluno = $aluno;
    }
    /**
     * @return Response
     */
    
    // -------------------------------
    // Rotas Dos Formulario 
    // ------------------------------
    
    public function create()
    {
        return view('site.dashboard.administrativo.aluno.create', //compact('aluno')
        );
    }

        /**
         * @return Response
         */
    
         public function edit($id)
         {
             // Pega o ID do aluno da sessão
             $idAluno = session('id');
             
             // Se o ID do aluno da sessão não estiver definido, redireciona para outra página ou retorna um erro
             
             if (!$idAluno) {
                 return redirect()->route('login')->withErrors(['msg' => 'Sessão expirada, faça login novamente.']);
             }

             // Encontra o aluno logado
             $aluno = Aluno::find($idAluno);
         
             // Encontra o aluno que será editado
             $editAluno = Aluno::findOrFail($id);
         
             // Retorna a view com as variáveis necessárias
             return view('site.dashboard.administrativo.aluno.edit', compact('aluno', 'editAluno'));
         }
         

    // -------------------------------
    // Croud STORE
    // ------------------------------

    public function store(Request $request)
    {
        $request -> validate($this->aluno->Regras(), $this->aluno->Feedback());
        $imagem = $request -> file('foto');
        $imagem_url = $imagem -> store('imagem', 'public');

        $alunos = $this->aluno->create([

            'nome' => $request-> nome,
            'foto' => $imagem_url,
        ]);

        return response()->json($alunos, 200);
    }

    // -------------------------------
    // Listar Aluno
    
    public function index()
    {
        $idAluno = session('id');
        // dd($idAluno);
        $aluno = Aluno::find($idAluno);
        
        // Filtra somente os alunos ativos
        $lista = Aluno::where('statusAluno', 'ativo')->get();
        
        // dd($lista); 
        $idUsuario = session('id');
        $usuario = Usuario::find($idUsuario);
        
        if (!$aluno) {
            abort(404, 'Aluno não encontrado');
        }
        // dd($lista);
        return view('site.dashboard.administrativo.aluno.index', compact('aluno', 'usuario', 'lista'));
    }
    
    // -------------------------------



    // -------------------------------
    // Cadastro Aluno

    public function cadAluno (Request $request)
    {
        $request->merge(['create_at' => now()]);
        $request->merge(['updated_at' => now()]);

        $request->validate([

            'nomeAluno'     => 'required|string|max:100',
            'emailAluno'    => 'required|string|max:100',
            'telefoneAluno' => 'required|string|max:20',
            'dataCadAluno'  => 'required|date',
            // 'fotoAluno'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'statusAluno'   => 'required|in:ativo,desativo',
            'idCurso'       => 'required|exists:tblcurso,idCurso',

        ]);

        $aluno = new Aluno();

        $aluno->nomeAluno       = $request->input('nomeAluno');
        $aluno->emailAluno      = $request->input('emailAluno');
        $aluno->telefoneAluno   = $request->input('telefoneAluno');
        $aluno->dataCadAluno    = $request->input('dataCadAluno');
        // $aluno->fotoAluno       = $request->input('fotoAluno');
        $aluno->statusAluno     = $request->input('statusAluno');
        $aluno->idCurso         = $request->input('idCurso');
        $aluno->created_at      = $request->input('create_at');
        $aluno->updated_at      = $request->input('updated_at');

        $aluno->save();

        return redirect()->route('index.aluno')->with('success', 'Aluno adicionado com sucesso!');
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
        // Validação dos dados recebidos
        $request->validate([
            'nomeAluno'     => 'required|string|max:100',
            'emailAluno'    => 'required|string|email|max:100',
            'telefoneAluno' => 'required|string|max:20',
            'dataCadAluno'  => 'required|date',
            'statusAluno'   => 'required|in:ativo,desativo',
            'idCurso'       => 'required|exists:tblcurso,idCurso',
        ]);
    
        // Busca do aluno pelo ID
        $aluno = Aluno::findOrFail($idAluno);
    
        // Atualização dos dados do aluno
        $aluno->update($request->only([
            'nomeAluno',
            'emailAluno',
            'telefoneAluno',
            'dataCadAluno',
            'statusAluno',
            'idCurso',
        ]));
    
        // Redirecionamento com mensagem de sucesso
        return redirect()->route('index.aluno')
                         ->with('success', 'Aluno atualizado com sucesso.');
    }

    /**
     * @param  Aluno
     * @return Response
     */

    // -----------------------
    // Delete Aluno

    public function destroy($id)
    {
        // Busca do aluno pelo ID
        $aluno = Aluno::find($id);

    if ($aluno === null) {
        return response()->json(['erro' => 'Impossível desativar este registro. O aluno não existe!'], 404);
        }
        
        // Atualiza o status do aluno para 'desativo'
        $aluno->statusAluno = 'desativo';
        $aluno->save();
        
        return response()->json(['msg' => 'O status do aluno foi atualizado para desativo com sucesso'], 200);
        }
        
        // public function destroy($id)
        // {
        //     $alunos = $this -> aluno -> find($id);
    
        //     if($alunos === null){
        //         return response()->json(['erro' => 'Impossível deleter este registro. O aluno não existe!'], 404);
        //     }
    
        //     Storage::disk('public')->delete($alunos->foto);
        //     $alunos->delete();
        //     return response()->json(['msg' => 'O registro foi removido com sucesso'], 200);
        // }
    
}

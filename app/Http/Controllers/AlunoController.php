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
         return view('dashboard.administrativo.aluno.edit', //compact('aluno', 'editAluno')
        );
    }


    // -------------------------------
    // Croud START
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
        $lista = Aluno::all();
        
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
        $request->merge(['dataContratacao' => now()]);
        $request->merge(['create_at' => now()]);
        $request->merge(['updated_at' => now()]);

        $request->validate([

            'nomeAdmin'              => 'required|string|max:100',

        // -----------------------
        // ATENÇÃO !!!!!!!
        // continue a preencher !
        // Adicione os campos necessarios de acordo com a tabela
        // -----------------------

        ]);

        $aluno = new Aluno();

        $aluno->nomealuno           = $request->input('nomealuno');
        
        // -----------------------
        // ATENÇÃO !!!!!!!
        // Preencha com o restante de informações necessarias de acordo com a tabela
        // Todo os campos da tabela precisam ser listados aqui
        // -----------------------

        $aluno->statusAluno         = $request->input('statusAdmin');
        $aluno->created_at          = $request->input('create_at');
        $aluno->updated_at          = $request->input('updated_at');


        $aluno->save();

        return redirect()->route('site.dashboard.administrativo.aluno.index')->with('success', 'Aluno adicionado com sucesso!');
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
    // Update Aluno
    
    public function update(Request $request, $id)
    {
        $alunos = $this->aluno->find($id);
        
        if ($alunos === null) {
            return response()->json(['erro' => 'Impossível realizar a atualização. O aluno não existe!'], 404);
        }
        
        if ($request->method() === 'put') {
            $dadosDinamico = [];
            
            foreach ($alunos->Regras() as $input => $regra) {
                if (array_key_exists($input, $request->all())) {
                    $dadosDinamico[$input] = $regra;
                }
            }
            
            $request->validate($dadosDinamico, $this->aluno->Feedback());
        } else {
            $request->validate($this->aluno->Regras(), $this->aluno->Feedback());
        }
    
        if ($request->file('foto') == true) {
            Storage::disk('public')->delete($alunos->foto);
        }
        
        $imagem = $request->file('foto');
        $imagem_url = $imagem->store('imagem', 'public');
        
        $alunos->update([
            'nome' => $request->nome,
            'foto' => $imagem_url
        ]);
        
        return response()->json($alunos, 200);
    }
    

    /**
     * @param  Aluno
     * @return Response
     */

    // -----------------------
    // Delete Aluno
    // -----------------------
    public function destroy($id)
    {
        $alunos = $this -> aluno -> find($id);

        if($alunos === null){
            return response()->json(['erro' => 'Impossível deleter este registro. O aluno não existe!'], 404);
        }

        Storage::disk('public')->delete($alunos->foto);
        $alunos->delete();
        return response()->json(['msg' => 'O registro foi removido com sucesso'], 200);
    }

    
}

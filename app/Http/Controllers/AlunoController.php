<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlunoController extends Controller
{
    public $aluno;

    public function __construct(Aluno $aluno) {
        $this -> aluno = $aluno;
    }
    /**
     * @return Response
     */
    public function index()
    {
        return view('site.dashboard.administrativo.aluno.index');
    }

    
    /**
     * @return Response
     */

    // -------------------------------
    // Rotas Dos Formulario START
    // ------------------------------
     public function create()
     {
         return view('site.dashboard.administrativo.aluno.create', //compact('aluno')
        );
     }

            // -----------------------
            // ATENÇÃO !!!!!!!
            // continue a preencher !
            // Utilize a verificação abaixo quando a conexão com o banco for realizada
            // Ela ira verificar se o aluno realmente existe de acordo com o id
            // -----------------------

            // $idAluno = session('id');
            // $aluno = Aluno::find($idAluno);

            // if (!$aluno) {
            //     abort(404, 'Aluno não encontrado');
            // }

            public function edit($id)
            {
                // $idAluno = session('id');
                // $aluno = Aluno::find($idAluno);
        
                // $editAluno = Aluno::findOrFail($id);
        
                return view('dashboard.administrativo.aluno.edit', //compact('aluno', 'editAluno')
                );
            }

    // ------------------------------
    // Rotas Dos Formulario END
    // ------------------------------

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

            // -----------------------
            // ATENÇÃO !!!!!!!
            // continue a preencher !
            // Adicione os campos necessarios de acordo com a tabela
            // -----------------------

        ]);

        return response()->json($alunos, 200);
    }

    // -------------------------------
    // CADASTRO DO ALUNO 
    // ------------------------------
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

        // -----------------------
        // Listar Aluno
        // -----------------------
            public function show($id)
            {
                $alunos = $this->aluno->find($id);
                
                if($alunos === null) {
                    return response()->json(['error' => 'Não existe dados para esse aluno'], 404);
                }

                return response()->json($alunos, 200) ;
            }



    /**
     * @param  Request 
     * @param  Aluno 
     * @return Response
     */

    // -----------------------
    // Update Aluno
    // -----------------------
    public function update(Request $request, $id)
    {
       $alunos = $this->aluno->find($id);

        if($alunos === null){
            return response()->json(['erro' => 'Impossível realizar a atualização. O aluno não existe!'], 404);
        }

        if($request->method() === 'put') {

            $dadosDinamico = [];

            foreach ($alunos->Regras() as $input => $regra) {
                if(array_key_exists($input, $request->all())) {
                    $dadosDinamico[$input] = $regra;
                }
            }


            $request->validate($dadosDinamico, $this->aluno->Feedback());
        }
        else{
            $request->validate($this->aluno->Regras(), $this->aluno->Feedback());
        }

        if($request->file('foto') == true) {
            Storage::disk('public')->delete($alunos->foto);
        }

        $imagem = $request -> file('foto');

        $imagem_url = $imagem -> store('imagem', 'public');

       $alunos -> update([
            'nome' => $request->nome,
            'foto' => $imagem_url
            //continue a colocar os dados de acordo com a tabela
       ]); // update dos novos dados

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

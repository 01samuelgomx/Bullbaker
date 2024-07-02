<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use App\Models\Aluno;
use App\Models\Usuario;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    // -------------------------------
    // Listar Aluno
    
    public function index()
    {

        // Busca o administrador com base no ID da sessão ou outro critério adequado
        $idAdministrador = session('id');
        // dd($idAdministrador);
        $administrador = Administrador::find($idAdministrador);
        // dd($administrador);
        if (!$administrador) {
            abort(404, 'Administrador não encontrado');
        }
    

        $lista = Aluno::where('statusAluno', 'ativo')->get();
    
        $idUsuario = session('id');
        $usuario = Usuario::find($idUsuario);
    
        //-----------------------
        // Listar Views
        
        // Contar Alunos
        $result = DB::table('vw_alunos_ativos')->first();
        if ($result) {
            $num_alunos_ativos = $result->num_alunos_ativos;
        } else {
            $num_alunos_ativos = 0;
        }
    
        // Contar Cursos
        $result = DB::table('vw_cursos_ativos')->first();
        if ($result) {
            $num_cursos_ativos = $result->num_cursos_ativos;
        } else {
            $num_cursos_ativos = 0;
        }
    
        // Contar Aulas
        $result = DB::table('vw_aulas_ativas')->first();
        if ($result) {
            $num_aulas_ativas = $result->num_aulas_ativas;
        } else {
            $num_aulas_ativas = 0;
        }
    

        // Retornar a view com os dados necessários
        return view('site.dashboard.administrativo.aluno.index', compact( 'usuario', 'administrador', 'lista', 'num_alunos_ativos', 'num_cursos_ativos', 'num_aulas_ativas'));
    }
    
        /**
         * @return Response
         */
    
        // -------------------------------
        // Editar Aluno

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
            'fotoAluno'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'statusAluno'   => 'required|in:ativo,desativo',
            'idCurso'       => 'required|exists:tblcurso,idCurso',

        ],[
            'nomeAluno.required'     => 'O campo nome é obrigatório.',
            'nomeAluno.unique'       => 'Este nome já está em uso.',
            'nomeAluno.min'          => 'O nome deve ter no mínimo 3 caracteres.',
    
            'emailAluno.required'    => 'O campo e-mail é obrigatório.',
            'emailAluno.unique'      => 'Este e-mail já está em uso.',
            'emailAluno.email'       => 'O e-mail deve ser um endereço de e-mail válido.',
    
            'telefoneAluno.required' => 'O campo telefone é obrigatório.',
            'telefoneAluno.unique'   => 'Este telefone já está em uso.',
            'telefoneAluno.min'      => 'O telefone deve ter no mínimo 11 caracteres.',
    
            'dataCadAluno.required'  => 'O campo data de cadastro é obrigatório.',
            'dataCadAluno.date'      => 'A data de cadastro deve ser uma data válida.',
    
            'statusAluno.required'   => 'O campo status é obrigatório.',
            'statusAluno.in'         => 'O status deve ser "active" ou "inactive".',
    
            'fotoAluno.image'        => 'A foto deve ser uma imagem.',
            'fotoAluno.mimes'        => 'A foto deve ser um arquivo do tipo: jpeg, png, jpg, gif, svg.',
            'fotoAluno.max'          => 'A foto não deve ter mais que 2048 KB.',
    
            'idCurso.required'       => 'O campo curso é obrigatório.',
            'idCurso.exists'         => 'O curso selecionado é inválido.',
        ]);

        $aluno = new Aluno();

        $aluno->nomeAluno       = $request->input('nomeAluno');
        $aluno->emailAluno      = $request->input('emailAluno');
        $aluno->telefoneAluno   = $request->input('telefoneAluno');
        $aluno->dataCadAluno    = $request->input('dataCadAluno');
        
                // Upload da imagem
        if ($request->hasFile('fotoAluno') && $request->file('fotoAluno')->isValid()) {
        $file = $request->file('fotoAluno');
        $path = $file->store('public/img/alunos');
        $aluno->fotoAluno = basename($path);
    }

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
            'fotoAluno'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'statusAluno'   => 'required|in:ativo,desativo',
            'idCurso'       => 'required|exists:tblcurso,idCurso',
        ],[
            'nomeAluno.required'     => 'O campo nome é obrigatório.',
            'nomeAluno.unique'       => 'Este nome já está em uso.',
            'nomeAluno.min'          => 'O nome deve ter no mínimo 3 caracteres.',
    
            'emailAluno.required'    => 'O campo e-mail é obrigatório.',
            'emailAluno.unique'      => 'Este e-mail já está em uso.',
            'emailAluno.email'       => 'O e-mail deve ser um endereço de e-mail válido.',
    
            'telefoneAluno.required' => 'O campo telefone é obrigatório.',
            'telefoneAluno.unique'   => 'Este telefone já está em uso.',
            'telefoneAluno.min'      => 'O telefone deve ter no mínimo 11 caracteres.',
    
            'dataCadAluno.required'  => 'O campo data de cadastro é obrigatório.',
            'dataCadAluno.date'      => 'A data de cadastro deve ser uma data válida.',
    
            'statusAluno.required'   => 'O campo status é obrigatório.',
            'statusAluno.in'         => 'O status deve ser "active" ou "inactive".',
    
            'fotoAluno.image'        => 'A foto deve ser uma imagem.',
            'fotoAluno.mimes'        => 'A foto deve ser um arquivo do tipo: jpeg, png, jpg, gif, svg.',
            'fotoAluno.max'          => 'A foto não deve ter mais que 2048 KB.',
    
            'idCurso.required'       => 'O campo curso é obrigatório.',
            'idCurso.exists'         => 'O curso selecionado é inválido.',
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
            'fotoAluno',
            'idCurso',
        ]));

         // Atualização da imagem do curso, se uma nova imagem foi enviada
         if ($request->hasFile('fotoAluno')) {
            // Apaga a imagem anterior, se existir
            if ($aluno->fotoAluno) {
                Storage::delete('public/img/alunos/' . $aluno->fotoAluno);
            }
    
            // Armazena a nova imagem
            $path = $request->file('fotoAluno')->store('public/img/alunos');
            $aluno->fotoAluno = basename($path);
    
            // Salva a alteração da imagem no banco de dados
            $aluno->save();
        }
    
        // Redirecionamento com mensagem de sucesso
        return redirect()->route('index.aluno')->with('success', 'Aluno atualizado com sucesso.');
    }

    /**
     * @param  Aluno
     * @return Response
     */

    // -------------------------------
    // Delete Aluno
    
    public function destroy($id)
    {
       $editAluno = Aluno::findOrFail($id);
       $editAluno ->update(['statusAluno' => 'desativo']);
        
       return redirect()->route('index.aluno')->with('success', 'Aluno desativado com sucesso.');
    }

     // -------------------------------
     // LOGIN ALUNO APP

     public function login(Request $request)
     {
         $credentials = $request->validate([
             'email' => 'required|email',
             'senha' => 'required',
         ]);
     
         $usuario = Usuario::where('email', $credentials['email'])->where('senha', $credentials['senha'])->first();
     
         if ($usuario) {
            
             $token = $usuario->createToken('Token de Acesso')->plainTextToken;
     
             if ($usuario->tipo_usuario_type === 'aluno') {
                 $aluno = $usuario->tipo_usuario()->first();
     
                 if ($aluno) {
                     return response()->json([
                         'message' => 'Login bem sucedido',
                         'usuario' => [
                             'id' => $usuario->idUsuario,
                             'nome' => $usuario->nome,
                             'email' => $usuario->email,
                             'tipo_usuario' => $usuario->tipo_usuario_type,
                             'dados_aluno' => [
                                 'idAluno' => $aluno->idAluno,
                                 'nome' => $aluno->nomeAluno,
                                 'email' => $aluno->emailAluno,
                             ],
                         ],
                         'access_token' => $token,
                         'token_type' => 'Bearer',
                     ]);
                 }
             }
         }
     
         return response()->json(['message' => 'Credenciais inválidas ou usuário não é um aluno ou administrador'], 401);
     }
     


}

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
        $request->merge(['create_at' => now()]);
        $request->merge(['updated_at' => now()]);
    
        // Validação dos dados
        $request->validate([
            'nomeCurso'             => 'required|unique:tblcurso,nomeCurso|min:3',
            'descricaoCurso'        => 'required|min:10',
            'duracaoCurso'          => 'required|integer|min:1',
            'precoCurso'            => 'required|numeric|min:0',
            'vagasDisponiveisCurso' => 'required|integer|min:1',
            'fotoCurso'             => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'data_inicio'           => 'required|date',
            'data_fim'              => 'required|date|after_or_equal:data_inicio',
            'statusCurso'           => 'required|in:ativo,desativado',
            'aprendeDescriCursos'   => 'required|max:150',
            'tituloUmCurso'         => 'required|min:10',
            'descriumCurso'         => 'required|min:10',
            'tituloDoisCurso'       => 'required|min:10',
            'descriDoisCurso'       => 'required|min:10',
            'tituloTresCurso'       => 'required|min:10',
            'descriTresCurso'       => 'required|min:10',
        ], [
            'nomeCurso.required'             => 'O campo nome do curso é obrigatório.',
            'nomeCurso.unique'               => 'Este nome de curso já está em uso.',
            'nomeCurso.min'                  => 'O nome do curso deve ter pelo menos 3 caracteres.',
            'descricaoCurso.required'        => 'O campo descrição do curso é obrigatório.',
            'descricaoCurso.min'             => 'A descrição do curso deve ter pelo menos 10 caracteres.',
            'duracaoCurso.required'          => 'O campo duração do curso é obrigatório.',
            'duracaoCurso.integer'           => 'A duração do curso deve ser um número inteiro.',
            'duracaoCurso.min'               => 'A duração do curso deve ser de pelo menos 1.',
            'precoCurso.required'            => 'O campo preço do curso é obrigatório.',
            'precoCurso.numeric'             => 'O preço do curso deve ser um número.',
            'precoCurso.min'                 => 'O preço do curso deve ser pelo menos 0.',
            'vagasDisponiveisCurso.required' => 'O campo vagas disponíveis é obrigatório.',
            'vagasDisponiveisCurso.integer'  => 'As vagas disponíveis devem ser um número inteiro.',
            'vagasDisponiveisCurso.min'      => 'As vagas disponíveis devem ser pelo menos 1.',
            'fotoCurso.required'             => 'O campo foto do curso é obrigatório.',
            'fotoCurso.image'                => 'O arquivo deve ser uma imagem.',
            'fotoCurso.mimes'                => 'A imagem deve estar no formato jpeg, png, jpg, gif ou svg.',
            'fotoCurso.max'                  => 'A imagem não pode ser maior que 2048 kilobytes.',
            'data_inicio.required'           => 'O campo data de início é obrigatório.',
            'data_inicio.date'               => 'A data de início deve ser uma data válida.',
            'data_fim.required'              => 'O campo data de fim é obrigatório.',
            'data_fim.date'                  => 'A data de fim deve ser uma data válida.',
            'data_fim.after_or_equal'        => 'A data de fim deve ser uma data após ou igual à data de início.',
            'statusCurso.required'           => 'O campo status do curso é obrigatório.',
            'statusCurso.in'                 => 'O status do curso deve ser ativo ou desativado.',
            'aprendeDescriCursos.required'   => 'O campo descrição do que será aprendido é obrigatório.',
            'aprendeDescriCursos.max'        => 'A descrição do que será aprendido não pode ter mais de 150 caracteres.',
            'tituloUmCurso.required'         => 'O campo título um é obrigatório.',
            'tituloUmCurso.min'              => 'O título um deve ter pelo menos 10 caracteres.',
            'descriumCurso.required'         => 'O campo descrição um é obrigatório.',
            'descriumCurso.min'              => 'A descrição um deve ter pelo menos 10 caracteres.',
            'tituloDoisCurso.required'       => 'O campo título dois é obrigatório.',
            'tituloDoisCurso.min'            => 'O título dois deve ter pelo menos 10 caracteres.',
            'descriDoisCurso.required'       => 'O campo descrição dois é obrigatório.',
            'descriDoisCurso.min'            => 'A descrição dois deve ter pelo menos 10 caracteres.',
            'tituloTresCurso.required'       => 'O campo título três é obrigatório.',
            'tituloTresCurso.min'            => 'O título três deve ter pelo menos 10 caracteres.',
            'descriTresCurso.required'       => 'O campo descrição três é obrigatório.',
            'descriTresCurso.min'            => 'A descrição três deve ter pelo menos 10 caracteres.',
        ]);
        
    
        // Criação de uma nova instância de Cursos
        $curso = new Cursos();
    
        $curso->nomeCurso             = $request->input('nomeCurso');
        $curso->descricaoCurso        = $request->input('descricaoCurso');
        $curso->duracaoCurso          = $request->input('duracaoCurso');
        $curso->precoCurso            = $request->input('precoCurso');
        $curso->vagasDisponiveisCurso = $request->input('vagasDisponiveisCurso');
        $curso->aprendeDescriCursos   = $request->input('aprendeDescriCursos');
        $curso->data_inicio           = $request->input('data_inicio');
        $curso->data_fim              = $request->input('data_fim');
        $curso->tituloUmCurso         = $request->input('tituloUmCurso');
        $curso->descriumCurso         = $request->input('descriumCurso');
        $curso->tituloDoisCurso       = $request->input('tituloDoisCurso');
        $curso->descriDoisCurso       = $request->input('descriDoisCurso');
        $curso->tituloTresCurso       = $request->input('tituloTresCurso');
        $curso->descriTresCurso       = $request->input('descriTresCurso');
        $curso->statusCurso           = $request->input('statusCurso');

        // Upload da imagem
        if ($request->hasFile('fotoCurso') && $request->file('fotoCurso')->isValid()) {
            $file = $request->file('fotoCurso');
            $path = $file->store('public/img/cursos');
            $curso->fotoCurso = basename($path);
        }
    
        // Salva o novo curso
        $curso->save();
    
        // Redirecionamento com mensagem de sucesso
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
            'nomeCurso'             => 'unique:tblcurso,nomeCurso|min:3',
            'descricaoCurso'        => 'min:10',
            'duracaoCurso'          => 'integer|min:1',
            'precoCurso'            => 'numeric|min:0',
            'vagasDisponiveisCurso' => 'integer|min:1',
            'fotoCurso'             => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'data_inicio'           => 'date',
            'data_fim'              => 'date|after_or_equal:data_inicio',
            'statusCurso'           => 'in:ativo,desativado',
            'aprendeDescriCursos'   => 'max:150',
            'tituloUmCurso'         => 'min:10',
            'descriumCurso'         => 'min:10',
            'tituloDoisCurso'       => 'min:10',
            'descriDoisCurso'       => 'min:10',
            'tituloTresCurso'       => 'min:10',
            'descriTresCurso'       => 'min:10',
         ],[
            'nomeCurso.unique'               => 'Este nome de curso já está em uso.',
            'nomeCurso.min'                  => 'O nome do curso deve ter pelo menos 3 caracteres.',
            'descricaoCurso.min'             => 'A descrição do curso deve ter pelo menos 10 caracteres.',
            'duracaoCurso.integer'           => 'A duração do curso deve ser um número inteiro.',
            'duracaoCurso.min'               => 'A duração do curso deve ser de pelo menos 1.',
            'precoCurso.numeric'             => 'O preço do curso deve ser um número.',
            'precoCurso.min'                 => 'O preço do curso deve ser pelo menos 0.',
            'vagasDisponiveisCurso.integer'  => 'As vagas disponíveis devem ser um número inteiro.',
            'vagasDisponiveisCurso.min'      => 'As vagas disponíveis devem ser pelo menos 1.',
            'fotoCurso.image'                => 'O arquivo deve ser uma imagem.',
            'fotoCurso.mimes'                => 'A imagem deve estar no formato jpeg, png, jpg, gif ou svg.',
            'fotoCurso.max'                  => 'A imagem não pode ser maior que 2048 kilobytes.',
            'data_inicio.date'               => 'A data de início deve ser uma data válida.',
            'data_fim.date'                  => 'A data de fim deve ser uma data válida.',
            'data_fim.after_or_equal'        => 'A data de fim deve ser uma data após ou igual à data de início.',
            'statusCurso.in'                 => 'O status do curso deve ser ativo ou desativado.',
            'aprendeDescriCursos.max'        => 'A descrição do que será aprendido não pode ter mais de 150 caracteres.',
            'tituloUmCurso.max'              => 'O título um não pode ter mais de 25 caracteres.',
            'descriumCurso.min'              => 'A descrição um deve ter pelo menos 10 caracteres.',
            'tituloDoisCurso.min'            => 'O título dois deve ter pelo menos 25 caracteres.',
            'descriDoisCurso.max'            => 'A descrição dois não pode ter mais de 150 caracteres.',
            'tituloTresCurso.min'            => 'O título três deve ter pelo menos 25 caracteres.',
            'descriTresCurso.min'            => 'A descrição três deve ter pelo menos 150 caracteres.',
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
            'aprendeDescriCursos',
    
            'tituloUmCurso',
            'descriumCurso',
            'tituloDoisCurso',
    
            'descriDoisCurso',
            'tituloTresCurso',
            'descriTresCurso',
    
            'fotoCurso',
            'statusCurso',
            'created_at',
            'updated_at',
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
        $editCurso ->update(['statusCurso' => 'desativado']);
         
        return redirect()->route('index.curso')->with('success', 'curso desativado com sucesso.');
     }

}

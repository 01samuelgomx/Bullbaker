<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrador;
use App\Models\Aula;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class AulaController extends Controller
{
    public $aula;
    public $idAula;

    public function __construct(Aula $aula) {
        $this -> aula = $aula;
    }
    /**
     * @return Response
     */

    
    // -------------------------------
    // Create Aula
    
    public function create()
    {
        return view('site.dashboard.administrativo.aulas.create', //compact('aula')
    );
    }


    /**
     * @return Response
     */

    // -------------------------------
    // Listar Aula
    

    public function index()
    {
        $idAula = session('id');
        // dd($idCurso);
        $aula = Aula::find($idAula);
        
        // Filtra somente os cursos ativos
        $lista = Aula::where('statusAula', 'ativo')->get();
        
        // dd($curso->fotoCurso); 
        
        if (!$aula) {
            abort(404, 'Aula não encontrada');
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
        return view('site.dashboard.administrativo.aulas.index', compact('administrador','aula','lista','num_alunos_ativos','num_cursos_ativos','num_aulas_ativas'));
    }


        // -------------------------------
        // Edit Aula

         public function edit($id)
         {
             // Pega o ID do curso da sessão
             $idAula = session('id');
             
             // Se o ID do curso da sessão não estiver definido, redireciona para outra página ou retorna um erro
             
             if (!$idAula) {
                 return redirect()->route('login')->withErrors(['msg' => 'Sessão expirada, faça login novamente.']);
             }

             // Encontra o curso logado
             $aula = Aula::find($idAula);
         
             // Encontra o curso que será editado
             $editAula = Aula::findOrFail($id);
         
             // Retorna a view com as variáveis necessárias
             return view('site.dashboard.administrativo.aulas.edit', compact('aula', 'editAula'));
         }

        // -------------------------------
        // Cadastro Aula

        public function cadAula(Request $request)
{
        // Adiciona timestamps automaticamente
        $request->merge(['created_at' => now()]);
        $request->merge(['updated_at' => now()]);

        // Validação dos dados
        $request->validate([
            'idCurso'        => 'required|exists:tblcurso,idCurso',
            'nomeAula'       => 'required|unique:tblaulas,nomeAula|min:3',
            'descricaoAula'  => 'required|min:10',
            'duracaoAula'    => 'required|integer|min:1',
            'video_aulaAula' => 'nullable|url|regex:/^(https?:\/\/)?(www\.youtube\.com|youtu\.?be)\/.+$/',
            'statusAula'     => 'required|in:ativo,inativo',
        ]);

        // Criação de uma nova instância da aula
        $aula = new Aula();

        $aula->idCurso       = $request->input('idCurso'); 
        $aula->nomeAula      = $request->input('nomeAula');
        $aula->descricaoAula = $request->input('descricaoAula');
        $aula->duracaoAula   = $request->input('duracaoAula');
        $aula->statusAula    = $request->input('statusAula');

        // Verifica se há um vídeo sendo enviado no request
        if ($request->filled('video_aulaAula')) {
            // Atualização do link do vídeo na aula
            $aula->video_aulaAula = $request->input('video_aulaAula');
        }

        // Salva a nova aula
        $aula->save();

    // Redirecionamento com mensagem de sucesso
    return redirect()->route('index.aula')->with('success', 'Aula adicionada com sucesso!');
}

         
         

    /**
     * @param  Integer
     * @return Response
     */

 
    /**
     * @param  Request 
     * @param  Aula 
     * @return Response
     */


     public function update(Request $request, $idAula)
     {
         // Validação dos dados recebidos
         $request->validate([
             'idCurso'            => 'required|exists:tblcurso,idCurso',
             'nomeAula'            => 'required|unique:tblaulas,nomeAula|min:3',
             'descricaoAula'       => 'required|min:10',
             'duracaoAula'         => 'required|integer|min:1',
             'video_aulaAula' => 'nullable|url|regex:/^(https?:\/\/)?(www\.youtube\.com|youtu\.?be)\/.+$/',
             'statusAula'          => 'required|in:ativo,inativo',
         ]);
     
         // Busca da aula pelo ID
         $aula = Aula::findOrFail($idAula);
     
         // Atualização dos dados da aula
         $aula->idCurso = $request->idCurso;
         $aula->nomeAula = $request->nomeAula;
         $aula->descricaoAula = $request->descricaoAula;
         $aula->duracaoAula = $request->duracaoAula;
         $aula->statusAula = $request->statusAula;
     
         // Atualiza o link do vídeo do YouTube
         if ($request->filled('video_aulaAula')) {
             $aula->video_aulaAula = $request->video_aulaAula;
         }
     
         // Salva as alterações na aula
         $aula->save();
     
         // Redirecionamento com mensagem de sucesso
         return redirect()->route('index.aula')->with('success', 'Aula atualizada com sucesso.');
     }
     
     
     
    /**
     * @param  Aula
     * @return Response
     */

    // -----------------------
    // Delete Aula
     public function destroy($id)
     {
         $editAula = Aula::findOrFail($id);
         $editAula ->update(['statusAula' => 'desativo']);
          
         return redirect()->route('index.aula')->with('success', 'Aula desativada com sucesso.');
      }
}

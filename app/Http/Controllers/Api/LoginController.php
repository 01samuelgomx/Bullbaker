<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;


class LoginController extends Controller
{
        // -------------------------------
     // LOGIN ALUNO APP

     public function login(Request $request)
     {
     // dd($request);
         $credentials = $request->validate([
             'email' => 'required|email',
             'senha' => 'required',
         ]);

         $usuario = Usuario::where('email', $credentials['email'])->where('senha', $credentials['senha'])->first();
     // dd($usuario);
         if ($usuario) {
         // dd($usuario);
             $token = $usuario->createToken('Token de Acesso')->plainTextToken;
         //  dd($token);
             if ($usuario->tipo_usuario_type === 'aluno') {
                 $aluno = $usuario->tipo_usuario()->first();
             // dd($aluno->idAluno);
                 if ($aluno) {
                     return response()->json([
                         'message' => 'Login bem sucedido',
                         'usuario' => [
                             'id' => $usuario->id_usuario,
                             'nome' => $usuario->nome,
                             'email' => $usuario->email,
                             'tipo_usuario' => $usuario->tipo_usuario_type,

                            //  --------------------------------------------
                            'dados_aluno' => [
                                'idAluno'              => $aluno->idAluno,
                                'nome'                 => $aluno->nomeAluno,
                                'email'                => $aluno->emailAluno,
                                'telefone'             => $aluno->telefoneAluno,
                                'dataCadastro'         => $aluno->dataCadAluno,
                                'habilidade'           => $aluno->nivelHabilidade,
                                'estado'               => $aluno->estadoAluno,
                                'nomeCurso'            => $aluno->nomeCurso,
                                'idCurso'              => $aluno->idCurso,
                                'dataDeNascimento'     => $aluno->dataDeNascimento,
                                'objetivo'             => $aluno->objetivo,
                                'status'               => $aluno->statusAluno,
                                'foto'                 => $aluno->fotoAluno,
                            ],
                            //  --------------------------------------------
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

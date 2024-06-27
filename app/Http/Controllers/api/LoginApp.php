<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Administrador;
use App\Models\Usuario;
use Illuminate\Http\Request;

class LoginApp extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'senha' => 'required',
        ]);

        $usuario = Usuario::where('email', $credentials['email'])->where('senha', $credentials['senha'])->first();

        if ($usuario) {
            $token = $usuario->createToken('Token de acesso')->plainTextToken;

            if ($usuario->tipo_usuario_type === 'Aluno') {
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
                                'nome' => $aluno->nome,
                            ],
                        ],
                        'access_token' => $token,
                        'token_type' => 'Bearer',
                    ]);
                }
            } elseif ($usuario->tipo_usuario_type === 'Administrativo') {
                $administrador = $usuario->tipo_usuario()->first();

                if ($administrador) {
                    return response()->json([
                        'message' => 'Login bem sucedido',
                        'usuario' => [
                            'id' => $usuario->idUsuario,
                            'nome' => $usuario->nome,
                            'email' => $usuario->email,
                            'tipo_usuario' => $usuario->tipo_usuario_type,
                            'dados_adm' => [
                                'idAdmin' => $administrador->idAdmin,
                                'nomeAdmin' => $administrador->nomeAdmin,
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

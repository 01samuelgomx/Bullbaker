<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\Administrador;
use App\Models\Aluno;
use App\Models\usuario;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('site.login');
    }

     
     public function autenticar(Request $request)
     {
         // -------------------------------------
         // Definindo regras de validação
         $regras = [
             'email' => 'required|email',
             'senha' => 'required'
         ];
     
         // Definindo mensagens de erro personalizadas
         $msg = [
             'email.required' => 'O campo de email é obrigatório!',
             'email.email' => 'O e-mail informado não é válido.',
             'senha.required' => 'O campo de senha é obrigatório'
         ];
     
         // -------------------------------------
         // Validando a solicitação
         $request->validate($regras, $msg);
     
         // Obtendo email e senha da solicitação
         $email = $request->get('email');
        //  dd($email);
         $senha = $request->get('senha');
        //  dd($senha);
         // Buscando o usuário pelo email
         $usuario = usuario::where('email', $email)->first();
        //  dd($usuario);
         
         // -------------------------------------
         // Verificando se o usuário existe
         if (!$usuario) {
             return back()->withErrors(['email' => 'Email incorreto.']);
             }
             
             // Verificando se a senha está correta 
             if ($usuario->senha != $senha) {
                 return back()->withErrors(['senha' => 'Senha incorreta.']);
                 }

         // -------------------------------------
         
            // Obtendo o tipo de usuário
            $tipoUsuario = $usuario->tipo_usuario;
            // dd($tipoUsuario);
            $tipo = null;

            session([
             'email' => $usuario->email,
             ]);

             
             // -------------------------------------
             
             if ($tipoUsuario instanceof Aluno) {
           
                $tipo = 'aluno';

            //  dd($usuario->tipo_usuario_type);

             session([
                 'id'            => $usuario->tipo_usuario_id,
                 'nome'          => $usuario->nome,
                 'tipo_usuario_type'  => 'aluno',
             ]);
             
             return redirect()->route('index.aluno');
        }

             //-------------------------
          elseif ($tipoUsuario instanceof Administrador) {
            // dd($tipoUsuario);

            if($tipoUsuario->tipoAdministrador == 'Administrativo'){

                $tipo = 'Administrativo';
                
                session([
                    'id'            => $tipoUsuario->idAdmin,
                    'nome'          => $tipoUsuario->nomeAdmin,
                    'tipo_usuario'  => $tipoUsuario->tipoAdministrador,
                ]);

                return view('site.dashboard.administrativo.cursos.index');
        }
            }

        return back()->withErrors(['emailUsuario'=> 'Erro desconhecido de autenticação']);

    }
}

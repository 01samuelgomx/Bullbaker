<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\Administrador;
use App\Models\Aluno;
use App\Models\Usuario;
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
         $senha = $request->get('senha');
         // Buscando o usuário pelo email
         $usuario = Usuario::where("email", $email)->first();
         
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
         
         $tipo = null;
         // Iniciando a sessão
         session([
             'email' => $usuario->email,
             ]);
             
         // -------------------------------------
         // Verificando o tipo de usuário e redirecionando
         if ($tipoUsuario instanceof Administrador) {
         // dd($tipoUsuario);

            $tipo = 'Administrativo';

             session([
                 'id'            => $usuario->idAdmin,
                 'nome'          => $usuario->nomeAdmin,
                 'tipo_usuario'  => 'Administrativo',
             ]);
             return view('site.dashboard.administrativo.cursos.index');
         }


          //-------------------------
          elseif ($tipoUsuario instanceof Aluno) {
            // dd($tipoUsuario);
   
               $tipo = 'aluno';
   
                session([
                    'id'            => $usuario->idAluno,
                    'nome'          => $usuario->nomeAluno,
                    'tipo_usuario'  => 'aluno',
                ]);
                return view('site.dashboard.administrativo.cursos.index');
            }

            
        return back()->withErrors(['emailUsuario'=> 'Erro desconhecido de autenticação']);

    }
}

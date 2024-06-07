<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('site.login');
    }

         // -------------------------------------
     // -------------------------------------
     public function autenticar(Request $request)
     {
 
         $regras = [
             'emailUsuario' => 'required|email',
             'senhaUsuario' => 'required'
         ];
 
         $msg = [
             'emailUsuario.required' => 'O campo de email é obrigatório !',
             'emailUsuario.email' => 'O e-mail informado não é válido.',
             'senhaUsuario.required' => 'O campo de senha é obrigatório'
         ];
 
         $request->validate($regras, $msg);
 
         $email = $request->get('emailUsuario');
         $senha = $request->get('senhaUsuario');
        
         $usuario = Usuario::where("emailUsuario", $email)->first();
 
 
         if(!$usuario){
             return back()->withErrors(['emailUsuario' => 'O email informado não está cadastrado.']);
         }
         
         if($usuario->senhaUsuario != $senha){
             return back()->withErrors(['senhaUsuario' => 'Senha incorreta.']);
         }
 
         // -------------------------------------
 
         $tipoUsuario = $usuario->tipo_usuario;
 
         $tipo = null;
 
         session([
             'email' => $usuario->emailUsuario,
         ]);
         
         if($tipoUsuario instanceof Cliente){
             // dd($tipo);
             // $tipo = 'cliente';
             
             session([
                 'id'            => $tipoUsuario->idCliente,
                 'nome'          => $tipoUsuario->nomeCliente,
                 'tipo_usuario'  => 'cliente',
             ]);
 
 
             return redirect('dashboard/usuario');
             
         }
              //-------------------------
              elseif($tipoUsuario instanceof Administradores){
 
             if($tipoUsuario->tipoAdministrador == 'admin'){
 
                 $tipo = 'administrador';
                 
                 session([
                     'id'            => $tipoUsuario->idAdmin,
                     'nome'          => $tipoUsuario->nomeAdmin,
                     'tipo_usuario'  => $tipoUsuario->tipoAdministrador,
                 ]);
 
                 return redirect('dashboard/administrativo');
 
      }
         } 
         
         return back()->withErrors(['emailUsuario'=> 'Erro desconhecido de autenticação']);
 
 
     }
}

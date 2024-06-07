<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use Illuminate\Support\Facades\Hash;
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
             'email' => 'required|email',
             'senha' => 'required'
         ];
 
         $msg = [
             'email.required' => 'O campo de email é obrigatório !',
             'email.email' => 'O e-mail informado não é válido.',
             'senha.required' => 'O campo de senha é obrigatório'
         ];

         $request->validate($regras, $msg);

         $email = $request->get('email');
         $senha = $request->get('senha');
 
         $usuario = Usuario::where("email", $email)->first();
         
         
         if (!$usuario) {
             return back()->withErrors(['email' => 'Email incorreto.']);
            }
            
            if ($usuario->senha != $senha) {
                return back()->withErrors(['senha' => 'Senha incorreta.']);
            }
            
            // -------------------------------------
            
            $tipoUsuario = $usuario->tipo_usuario;
            
            $tipo = null;
            
            session([
                'email' => $usuario->email,
            ]);



            
            if ($tipoUsuario instanceof Administrador ) {
            // dd($tipoUsuario);

            $tipo = 'Administrativo';

            session([
                'id'            => $usuario->idAdmin,
                'nome'          => $usuario->nomeAdmin,
                'tipo_usuario'  => 'Administrativo',
            ]);
            return redirect('dashboard/alunos/');
        }
        
         return back()->withErrors(['email'=> 'Erro desconhecido de autenticação']);
 
 
     }
}

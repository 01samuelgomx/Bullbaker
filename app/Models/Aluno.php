<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;
    protected $table = 'tblaluno';
    protected $primaryKey = 'idAluno';

    public function usuario(){
        return $this->morphOne(Usuario::class, 'tipo_usuario');
    }

    protected $fillable = [

        'idAluno',
        'nomeAluno',
        'emailAluno',
        'telefoneAluno',
        'dataCadAluno',
        'statusAluno',
        // 'fotoAluno',
        'idCurso',
    
    ];

    public function Regras(){
    return [

        'nomeAluno' => 'required|unique:alunos,nomeAluno,'.$this->id.'|min:3',
        'emailAluno' => 'required|unique:alunos,emailAluno,'.$this->id.'|email',
        'telefoneAluno' => 'required|unique:alunos,telefoneAluno,'.$this->id.'|min:20',
        'dataCadAluno' => 'required|date',
        'statusAluno' => 'required|in:active,inactive',
        'fotoAluno' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'idCurso' => 'required|exists:tblcurso,idCurso',

    ];

    }


    public function Feedback(){
    return[

        'nomeAluno.required' => 'O campo nome é obrigatório.',
        'nomeAluno.unique' => 'Este nome já está em uso.',
        'nomeAluno.min' => 'O nome deve ter no mínimo 3 caracteres.',

        'emailAluno.required' => 'O campo e-mail é obrigatório.',
        'emailAluno.unique' => 'Este e-mail já está em uso.',
        'emailAluno.email' => 'O e-mail deve ser um endereço de e-mail válido.',

        'telefoneAluno.required' => 'O campo telefone é obrigatório.',
        'telefoneAluno.unique' => 'Este telefone já está em uso.',
        'telefoneAluno.min' => 'O telefone deve ter no mínimo 11 caracteres.',

        'dataCadAluno.required' => 'O campo data de cadastro é obrigatório.',
        'dataCadAluno.date' => 'A data de cadastro deve ser uma data válida.',

        'statusAluno.required' => 'O campo status é obrigatório.',
        'statusAluno.in' => 'O status deve ser "active" ou "inactive".',

        // 'fotoAluno.image' => 'A foto deve ser uma imagem.',
        // 'fotoAluno.mimes' => 'A foto deve ser um arquivo do tipo: jpeg, png, jpg, gif, svg.',
        // 'fotoAluno.max' => 'A foto não deve ter mais que 2048 KB.',

        'idCurso.required' => 'O campo curso é obrigatório.',
        'idCurso.exists' => 'O curso selecionado é inválido.',

    ];
  }
}

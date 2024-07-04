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
        'nivelHabilidade',
        'estadoAluno',
        'nomeCurso',
        'dataDeNascimento',
        'objetivo',
        'statusAluno',
        'fotoAluno',
        'idCurso',
    ];

    public function regras()
    {
        return [
            'nomeAluno'         => 'required|unique:tblaluno,nomeAluno,' . $this->id . '|min:3',
            'emailAluno'        => 'required|unique:tblaluno,emailAluno,' . $this->id . '|email',
            'telefoneAluno'     => 'required|unique:tblaluno,telefoneAluno,' . $this->id . '|min:10',
            'dataCadAluno'      => 'required|date',
            'nivelHabilidade'   => 'required|string|max:255',
            'estadoAluno'       => 'required|string|max:255',
            'nomeCurso'         => 'required|string|max:255',
            'dataDeNascimento'  => 'required|date',
            'objetivo'          => 'nullable|string',
            'statusAluno'       => 'required|in:ativo,desativo',
            'fotoAluno'         => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'idCurso'           => 'required|exists:tblcurso,idCurso',
        ];
    }


    public function Feedback(){
    return[

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

        'nivelHabilidade.required' => 'O campo nível de habilidade é obrigatório.',
        'nivelHabilidade.string'   => 'O nível de habilidade deve ser um texto.',
        'nivelHabilidade.max'      => 'O nível de habilidade não deve exceder 255 caracteres.',

        'estadoAluno.required'   => 'O campo estado é obrigatório.',
        'estadoAluno.string'     => 'O estado deve ser um texto.',
        'estadoAluno.max'        => 'O estado não deve exceder 255 caracteres.',

        'nomeCurso.required'     => 'O campo nome do curso é obrigatório.',
        'nomeCurso.string'       => 'O nome do curso deve ser um texto.',
        'nomeCurso.max'          => 'O nome do curso não deve exceder 255 caracteres.',

        'dataDeNascimento.required' => 'O campo data de nascimento é obrigatório.',
        'dataDeNascimento.date'     => 'A data de nascimento deve ser uma data válida.',

        'objetivo.string'        => 'O objetivo deve ser um texto.',

        'statusAluno.required'   => 'O campo status é obrigatório.',
        'statusAluno.in'         => 'O status deve ser "ativo" ou "desativado".',

        'fotoAluno.image'        => 'A foto deve ser uma imagem.',
        'fotoAluno.mimes'        => 'A foto deve ser um arquivo do tipo: jpeg, png, jpg, gif, svg.',
        'fotoAluno.max'          => 'A foto não deve ter mais que 2048 KB.',

        'idCurso.required'       => 'O campo curso é obrigatório.',
        'idCurso.exists'         => 'O curso selecionado é inválido.',

    ];
  }
}

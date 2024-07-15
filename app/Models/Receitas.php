<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receitas extends Model
{
    use HasFactory;
    protected $primaryKey = 'idReceita';
    protected $table = 'tblreceitas';

    protected $fillable = [
        'nomeReceita',
         'ingredienteReceita', 
         'modoPreparoReceita', 
         'fotoReceita', 
         'statusReceita',
    ];

    public function regras(){
    return [

        'idReceita'          => 'required|integer|unique:tblreceitas,idReceita',
        'nomeReceita'        => 'required|string|max:35',
        'ingredienteReceita' => 'required|string|max:550',
        'modoPreparoReceita' => 'required|string|max:750',
        'fotoReceita'        => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'statusReceita'      => 'required|in:ativo,desativo',
        'created_at'         => 'required|date',
        'updated_at'         => 'required|date',

    ];
}


public function Feedback(){
    return [

        'idReceita.required' => 'O campo ID da Receita é obrigatório.',
        'idReceita.integer' => 'O campo ID da Receita deve ser um número inteiro.',
        'idReceita.unique' => 'O campo ID da Receita deve ser único.',

        'nomeReceita.required' => 'O campo Nome da Receita é obrigatório.',
        'nomeReceita.string' => 'O campo Nome da Receita deve ser um texto.',
        'nomeReceita.max' => 'O campo Nome da Receita deve ter no máximo 35 caracteres.',

        'ingredienteReceita.required' => 'O campo Ingredientes da Receita é obrigatório.',
        'ingredienteReceita.string' => 'O campo Ingredientes da Receita deve ser uma texto.',
        'ingredienteReceita.max' => 'O campo Ingredientes da Receita deve ter no máximo 550 caracteres.',

        'modoPreparoReceita.required' => 'O campo modo de Preparo da Receita é obrigatório.',
        'modoPreparoReceita.string' => 'O campo modo de Preparo da Receita deve ser um texto.',
        'modoPreparoReceita.max' => 'O campo modo de Preparo da Receita  deve ter no máximo 750 caracteres.',

        'fotoReceita.image' => 'O campo Foto da Receita deve ser uma imagem.',
        'fotoReceita.mimes' => 'A imagem da Receita deve estar em um dos seguintes formatos: jpeg, png, jpg, gif, svg.',
        'fotoReceita.max' => 'A imagem da Receita deve ter no máximo 2MB.',

        'statusReceita.required' => 'O campo Status da Receita é obrigatório.',
        'statusReceita.in' => 'O campo Status da Receita deve ser "ativo" ou "desativo".',

        'created_at.required' => 'O campo Data de Criação é obrigatório.',
        'created_at.date' => 'O campo Data de Criação deve ser uma data válida.',

        'updated_at.required' => 'O campo Data de Atualização é obrigatório.',
        'updated_at.date' => 'O campo Data de Atualização deve ser uma data válida.',
    ];
  }
}
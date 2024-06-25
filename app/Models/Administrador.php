<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Usuario;

class Administrador extends Model
{
    use HasFactory;

    protected $table = 'tbladministrador';
    protected $primaryKey = 'idAdmin';

    protected $fillable = [
        'idAdmin',
        'nomeAdmin',       
        'emailAdmin',      
        'telefoneAdmin',      
        'dataCadAdmin',      
        'statusAdmin',
        'fotoAdmin',
        'tipoAdministrador',
        'created_at',
        'updated_at',
    ];

    public function usuario(){
        return $this->morphOne(Usuario::class, 'tipo_usuario');
    }

    public function Regras()
    {
        return [
            'nomeAdmin' => 'required|unique:tbladministrador,nomeAdmin,'.$this->id.'|min:3',
            'emailAdmin' => 'required|unique:tbladministrador,emailAdmin,'.$this->id.'|email',
            'telefoneAdmin' => 'required|unique:tbladministrador,telefoneAdmin,'.$this->id.'|min:10',
            'dataCadAdmin' => 'required|date',
            'statusAdmin' => 'required|in:ativo,desativado',
            'fotoAdmin' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tipoAdministrador' => 'required|in:super,regular',
        ];
    }

    public function Feedback()
    {
        return [
            'nomeAdmin.required' => 'O campo nome é obrigatório.',
            'nomeAdmin.unique' => 'Este nome já está em uso.',
            'nomeAdmin.min' => 'O nome deve ter no mínimo 3 caracteres.',
            'emailAdmin.required' => 'O campo email é obrigatório.',
            'emailAdmin.unique' => 'Este email já está em uso.',
            'emailAdmin.email' => 'Insira um endereço de email válido.',
            'telefoneAdmin.required' => 'O campo telefone é obrigatório.',
            'telefoneAdmin.unique' => 'Este telefone já está em uso.',
            'telefoneAdmin.min' => 'O telefone deve ter no mínimo 10 caracteres.',
            'dataCadAdmin.required' => 'O campo data de cadastro é obrigatório.',
            'dataCadAdmin.date' => 'Insira uma data válida.',
            'statusAdmin.required' => 'O campo status é obrigatório.',
            'statusAdmin.in' => 'O status deve ser ativo ou desativado.',
            'fotoAdmin.image' => 'O arquivo deve ser uma imagem.',
            'fotoAdmin.mimes' => 'A imagem deve estar em um dos seguintes formatos: jpeg, png, jpg, gif, svg.',
            'fotoAdmin.max' => 'A imagem deve ter no máximo 2MB.',
            'tipoAdministrador.required' => 'O campo tipo de administrador é obrigatório.',
            'tipoAdministrador.in' => 'O tipo de administrador deve ser super ou regular.',
        ];
    }
}

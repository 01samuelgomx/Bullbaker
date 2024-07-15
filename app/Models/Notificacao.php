<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacao extends Model
{
    use HasFactory;

    protected $table = 'tblnotificacao';
    protected $primaryKey = 'idNotificacao';


    protected $fillable = [
        'idNotificacao',
        'tituloNotificacao',
        'mensagemNotificacao', 
        'statusNotificacao',
        'fotoNotificacao', 
        'created_at',
        'updated_at',
    ];

public function Regras(){
    return[
        'tituloNotificacao'    => 'required|string|max:35',
        'mensagemNotificacao'  => 'required|string|max:150',
        'statusNotificacao'       => 'required|in:ativo,desativo',
        'fotoNotificacao'      => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];
}

    public function Feedback(){
        return[
            'tituloNotificacao.max'    => 'O titulo da notificação deve ter no máximo 35 caracteres.',
            'mensagemNotificacao.max'  => 'A mensagem da notificação deve ter no máximo 150 caracteres.',
            'fotoNotificacao.image'    => 'O arquivo deve ser uma imagem.',
            'fotoNotificacao.mimes'    => 'A imagem deve estar em um dos seguintes formatos: jpeg, png, jpg, gif, svg.',
            'fotoNotificacao.max'      => 'A imagem deve ter no máximo 2MB.',
        ];
    }

    public function usuario(){
        return $this->morphOne(Usuario::class, 'tipo_usuario');
    }
}

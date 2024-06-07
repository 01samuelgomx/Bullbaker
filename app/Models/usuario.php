<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';

    public function tipo_usuario(){

        return $this->morphTo('tipo_usuario','tipo_usuario_type','tipo_usuario_id');
    }
}

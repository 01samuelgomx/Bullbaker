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
        return $this->morphOne(Usuario::class,'tipo_usuario');
    }

}

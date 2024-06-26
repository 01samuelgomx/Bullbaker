<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;
    protected $table = 'tblaulas';
    protected $primaryKey = 'idAula';

    protected $fillable = [
        'nomeAula',
        'descricaoAula',
        'duracaoAula',
        'video_aulaAula',
        'statusAula',
        'idCurso',
        'created_at',
        'updated_at',
    ];
    
    public function Regras()
    {
        return [
            'nomeAula'       => 'required|unique:tblaulas,nomeAula|min:3',
            'descricaoAula'  => 'required|min:10',
            'duracaoAula'    => 'required|integer|min:1',
            'video_aulaAula' => ['nullable', 'string', 'regex:/<iframe.*src="https:\/\/www\.youtube\.com\/embed\/([a-zA-Z0-9_-]+)".*<\/iframe>/'],
            'statusAula'     => 'required|in:ativo,desativo',
            'idCurso'        => 'required|exists:tblcurso,idCurso',
        ];
    }
    
    public function Feedback(){
        return [
            'idCurso.required'       => 'O campo ID do curso é obrigatório.',
            'idCurso.exists'         => 'O curso associado não existe.',
            'nomeAula.required'       => 'O campo nome da aula é obrigatório.',
            'nomeAula.unique'         => 'Este nome de aula já está em uso.',
            'nomeAula.min'            => 'O nome da aula deve ter no mínimo 3 caracteres.',
            'descricaoAula.required'  => 'O campo descrição é obrigatório.',
            'descricaoAula.min'       => 'A descrição deve ter no mínimo 10 caracteres.',
            'duracaoAula.required'    => 'O campo duração é obrigatório.',
            'duracaoAula.integer'     => 'A duração deve ser um número inteiro.',
            'duracaoAula.min'         => 'A duração deve ser de pelo menos 1 hora.',
            'video_aulaAula.required' => 'O campo do vídeo é obrigatório.',
            'statusAula.required'     => 'O campo status é obrigatório.',
            'statusAula.in'           => 'O status deve ser "ativo" ou "inativo".',
        ];
    }
}

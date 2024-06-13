<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $table = 'tblcurso';
    protected $primaryKey = 'idCurso';

    protected $fillable = [
        'idCurso',
        'nomeCurso',
        'descricaoCurso',
        'duracaoCurso',
        'precoCurso',
        'vagasDisponiveisCurso',
        'data_inicio',
        'data_fim',
        'statusCurso',
        'created_at',
        'updated_at',
    ];

    public function Regras(){
        return [
            'nomeCurso' => 'required|unique:cursos,nomeCurso,'.$this->id.'|min:3',
            'descricaoCurso' => 'required|min:10',
            'duracaoCurso' => 'required|integer|min:1',
            'precoCurso' => 'required|numeric|min:0',
            'vagasDisponiveisCurso' => 'required|integer|min:1',
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date|after_or_equal:data_inicio',
            'statusCurso' => 'required|in:ativo,inativo',
        ];
    }

    public function Feedback(){
        return [
            'nomeCurso.required' => 'O campo nome do curso é obrigatório.',
            'nomeCurso.unique' => 'Este nome de curso já está em uso.',
            'nomeCurso.min' => 'O nome do curso deve ter no mínimo 3 caracteres.',
            'descricaoCurso.required' => 'O campo descrição é obrigatório.',
            'descricaoCurso.min' => 'A descrição deve ter no mínimo 10 caracteres.',
            'duracaoCurso.required' => 'O campo duração é obrigatório.',
            'duracaoCurso.integer' => 'A duração deve ser um número inteiro.',
            'duracaoCurso.min' => 'A duração deve ser de pelo menos 1 hora.',
            'precoCurso.required' => 'O campo preço é obrigatório.',
            'precoCurso.numeric' => 'O preço deve ser um número.',
            'precoCurso.min' => 'O preço deve ser um valor positivo.',
            'vagasDisponiveisCurso.required' => 'O campo vagas disponíveis é obrigatório.',
            'vagasDisponiveisCurso.integer' => 'O número de vagas deve ser um número inteiro.',
            'vagasDisponiveisCurso.min' => 'Deve haver pelo menos 1 vaga disponível.',
            'data_inicio.required' => 'O campo data de início é obrigatório.',
            'data_inicio.date' => 'A data de início deve ser uma data válida.',
            'data_fim.required' => 'O campo data de fim é obrigatório.',
            'data_fim.date' => 'A data de fim deve ser uma data válida.',
            'data_fim.after_or_equal' => 'A data de fim deve ser igual ou posterior à data de início.',
            'statusCurso.required' => 'O campo status é obrigatório.',
            'statusCurso.in' => 'O status deve ser "ativo" ou "inativo".',
        ];
    }
}

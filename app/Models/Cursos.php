<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    use HasFactory;
    protected $table = 'tblcurso';
    protected $primaryKey = 'idCurso';

    protected $fillable = [
        'nomeCurso',
        'descricaoCurso',
        'duracaoCurso',
        'precoCurso',
        'vagasDisponiveisCurso',
        'data_inicio',
        'data_inicio',
        'aprendeDescriCursos',
        'tituloUmCurso',
        'descriumCurso',
        'tituloDoisCurso',
        'descriDoisCurso',
        'tituloTresCurso',
        'descriTresCurso',
        'fotoCurso',
        'statusCurso',
        'created_at',
        'updated_at',
    ];

    public function Regras()
    {
        return [
            'nomeCurso'             => 'required|unique:tblcurso,nomeCurso|min:3',
            'descricaoCurso'        => 'required|min:10',
            'duracaoCurso'          => 'required|integer|min:1',
            'precoCurso'            => 'required|numeric|min:0',
            'vagasDisponiveisCurso' => 'required|integer|min:1',
            'fotoCurso'             => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'data_inicio'           => 'required|date',
            'data_fim'              => 'required|date|after_or_equal:data_inicio',
            'statusCurso'           => 'required|in:ativo,desativado',
            'aprendeDescriCursos'   => 'required|max:150',
            'tituloUmCurso'         => 'required|min:10',
            'descriumCurso'         => 'required|min:10',
            'tituloDoisCurso'       => 'required|min:10',
            'descriDoisCurso'       => 'required|min:10',
            'tituloTresCurso'       => 'required|min:10',
            'descriTresCurso'       => 'required|min:10',
        ];
    }


    public function Feedback(){
        return [
            'nomeCurso.required'             => 'O campo nome do curso é obrigatório.',
            'nomeCurso.unique'               => 'Este nome de curso já está em uso.',
            'nomeCurso.min'                  => 'O nome do curso deve ter pelo menos 3 caracteres.',
            'descricaoCurso.required'        => 'O campo descrição do curso é obrigatório.',
            'descricaoCurso.min'             => 'A descrição do curso deve ter pelo menos 10 caracteres.',
            'duracaoCurso.required'          => 'O campo duração do curso é obrigatório.',
            'duracaoCurso.integer'           => 'A duração do curso deve ser um número inteiro.',
            'duracaoCurso.min'               => 'A duração do curso deve ser de pelo menos 1.',
            'precoCurso.required'            => 'O campo preço do curso é obrigatório.',
            'precoCurso.numeric'             => 'O preço do curso deve ser um número.',
            'precoCurso.min'                 => 'O preço do curso deve ser pelo menos 0.',
            'vagasDisponiveisCurso.required' => 'O campo vagas disponíveis é obrigatório.',
            'vagasDisponiveisCurso.integer'  => 'As vagas disponíveis devem ser um número inteiro.',
            'vagasDisponiveisCurso.min'      => 'As vagas disponíveis devem ser pelo menos 1.',
            'fotoCurso.required'             => 'O campo foto do curso é obrigatório.',
            'fotoCurso.image'                => 'O arquivo deve ser uma imagem.',
            'fotoCurso.mimes'                => 'A imagem deve estar no formato jpeg, png, jpg, gif ou svg.',
            'fotoCurso.max'                  => 'A imagem não pode ser maior que 2048 kilobytes.',
            'data_inicio.required'           => 'O campo data de início é obrigatório.',
            'data_inicio.date'               => 'A data de início deve ser uma data válida.',
            'data_fim.required'              => 'O campo data de fim é obrigatório.',
            'data_fim.date'                  => 'A data de fim deve ser uma data válida.',
            'data_fim.after_or_equal'        => 'A data de fim deve ser uma data após ou igual à data de início.',
            'statusCurso.required'           => 'O campo status do curso é obrigatório.',
            'statusCurso.in'                 => 'O status do curso deve ser ativo ou desativado.',
            'aprendeDescriCursos.required'   => 'O campo descrição do que será aprendido é obrigatório.',
            'aprendeDescriCursos.max'        => 'A descrição do que será aprendido não pode ter mais de 150 caracteres.',
            'tituloUmCurso.required'         => 'O campo título um é obrigatório.',
            'tituloUmCurso.max'              => 'O título um não pode ter mais de 25 caracteres.',
            'descriumCurso.required'         => 'O campo descrição um é obrigatório.',
            'descriumCurso.min'              => 'A descrição um deve ter pelo menos 10 caracteres.',
            'tituloDoisCurso.required'       => 'O campo título dois é obrigatório.',
            'tituloDoisCurso.min'            => 'O título dois deve ter pelo menos 25 caracteres.',
            'descriDoisCurso.required'       => 'O campo descrição dois é obrigatório.',
            'descriDoisCurso.max'            => 'A descrição dois não pode ter mais de 150 caracteres.',
            'tituloTresCurso.required'       => 'O campo título três é obrigatório.',
            'tituloTresCurso.min'            => 'O título três deve ter pelo menos 25 caracteres.',
            'descriTresCurso.required'       => 'O campo descrição três é obrigatório.',
            'descriTresCurso.min'            => 'A descrição três deve ter pelo menos 150 caracteres.',
        ];
    }
}

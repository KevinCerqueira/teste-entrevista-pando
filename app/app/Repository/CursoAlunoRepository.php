<?php
namespace App\Repository;

use App\Models\CursoAlunoModel;
use App\Models\AlunoModel;
use App\Models\CursoModel;
use Exception;

class CursoAlunoRepository{

    private static $cursoaluno;
    private static $aluno;
    private static $curso;

    function __construct() {
        self::$cursoaluno = new CursoAlunoModel();
        self::$aluno = new AlunoModel();
        self::$curso = new CursoModel();
    }

    public static function insert($alunocurso)
    {
        try{
            self::$cursoaluno
            ->insert($alunocurso);
        }catch(Exception $ex){
            throw new Exception('Erro ao cadastrar aluno no curso', $ex);
        }
    }

    public static function getRelationship()
    {
        return self::$cursoaluno
        ->join('curso', 'cursoaluno.idcurso', '=', 'curso.idcurso')
        ->join('aluno', 'cursoaluno.idaluno', '=', 'aluno.idaluno')
        ->select('aluno.*', 'curso.idcurso', 'curso.nome as nomecurso')
        ->get();
    }

    public static function getCursosByAluno($idaluno)
    {
        return self::$cursoaluno
        ->where('idaluno', '=', $idaluno)
        ->join('curso', 'cursoaluno.idcurso', '=', 'curso.idcurso')
        ->select('curso.*')
        ->get();
    }

    public static function getAlunosByCurso($idcurso)
    {
        $sql = "SELECT a.* FROM aluno a, cursoaluno ca
        WHERE ca.idaluno = a.idaluno
        AND ca.idcurso = ?";
        return \DB::select($sql, [$idcurso]);
    }

    public static function validateCursoAluno($idaluno, $idcurso)
    {
        $count = self::$cursoaluno
        ->where('idaluno', '=', $idaluno)
        ->where('idcurso', '=', $idcurso)
        ->count();
        if($count > 0){
            return true;
        }
        return false;
    }

    public static function deleteCurso($idcurso)
    {
        self::$cursoaluno->where('idcurso', '=', $idcurso)->delete();
        self::$curso->where('idcurso', '=', $idcurso)->delete();
    }

    public static function deleteAluno($idaluno)
    {
        self::$cursoaluno->where('idaluno', '=', $idaluno)->delete();
        self::$aluno->where('idaluno', '=', $idaluno)->delete();
    }

}

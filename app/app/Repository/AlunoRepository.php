<?php
namespace App\Repository;

use App\Models\AlunoModel;
use Exception;

class AlunoRepository{

    private static $aluno;

    function __construct() {
        self::$aluno = new AlunoModel();
    }

    public static function insert(array $aluno)
    {
        try{
            self::$aluno
            ->insert([
                'nome' => $aluno['nome'],
                'sobrenome' => $aluno['sobrenome']
            ]);
        }catch(Exception $ex){
            throw new Exception('Erro ao inserir novo aluno', $ex);
        }
    }

    public static function update(array $aluno)
    {
        try{
            self::$aluno
            ->where('idaluno', $aluno['idaluno'])
            ->update($aluno);
        }catch(Exception $ex){
            throw new Exception('Não foi possível atualizar os dados deste aluno', $ex);
        }
    }

    public static function getAll()
    {
        return self::$aluno
        ->orderby('idaluno', 'asc')
        ->get();
    }

    public static function get($idaluno)
    {
        try{
         $aluno = self::$aluno
            ->where('idaluno', '=', $idaluno)
            ->first();
        }catch(Exception $ex){
            throw new Exception('Não foi possível encontrar este aluno', $ex);
        }
        return $aluno;
    }

    public static function getByName($name)
    {
        return self::$aluno
        ->where('nome', 'like', '%'. $name .'%')
        ->orWhere('sobrenome', 'like', '%'. $name .'%')
        ->get();
    }
}

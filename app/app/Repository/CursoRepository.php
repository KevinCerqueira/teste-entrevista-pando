<?php
namespace App\Repository;

use App\Models\CursoModel;
use Exception;

class CursoRepository{

    private static $curso;

    function __construct() {
        self::$curso = new CursoModel();
    }

    public static function insert(array $curso)
    {
        try{
            self::$curso
            ->insert([
                'nome' => $curso['nome'],
                'descricao' => $curso['descricao']
            ]);
        }catch(Exception $ex){
            throw new Exception('Erro ao inserir novo curso', $ex);
        }
    }

    public static function update(array $curso)
    {
        try{
            self::$curso
            ->where('idcurso', $curso['idcurso'])
            ->update($curso);
        }catch(Exception $ex){
            throw new Exception('Não foi possível atualizar os dados deste curso', $ex);
        }
    }

    public static function getAll()
    {
        return self::$curso
        ->orderby('idcurso', 'asc')
        ->get();
    }

    public static function get($idcurso)
    {
        try{
            $curso = self::$curso
               ->where('idcurso', '=', $idcurso)
               ->first();
           }catch(Exception $ex){
               throw new Exception('Não foi possível encontrar este curso', $ex);
           }
           return $curso;
    }

    public static function getByName($name)
    {
        return self::$curso
        ->where('nome', 'like', '%'. $name .'%')
        ->get();
    }
}

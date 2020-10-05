<?php

namespace App\Business;

use App\Repository\CursoRepository;

ini_set('max_execution_time', 600);

class CursoBusiness{
    private $repo;

    function __construct() {
        $this->repo = new CursoRepository();
    }

    public function getCursos()
    {
        $cursosRaw = $this->repo->getAll();
        $cursos = array();
        foreach($cursosRaw as $curso){
            $cursos[] = [
                'id' => $curso->idcurso,
                'nome' => $curso->nome,
                'descricao' => $curso->descricao,
                'cargahoraria' => $curso->cargahoraria,
            ];
        }
        return $cursos;
    }

    public function getCurso($idcurso)
    {
        $curso = $this->repo->get($idcurso);
        return ['id' => $curso->idcurso, 'nome' => $curso->nome, 'cargahoraria' => $curso->cargahoraria];
    }
}

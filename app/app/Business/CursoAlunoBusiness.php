<?php

namespace App\Business;

use App\Repository\CursoAlunoRepository;
use App\Repository\CursoRepository;

ini_set('max_execution_time', 600);

class CursoAlunoBusiness{
    private $repo;
    private $curso;

    function __construct() {
        $this->repo = new CursoAlunoRepository();
        $this->curso = new CursoRepository();
    }

    public function getAlunosIntoCurso()
    {
        $cursosAlunos = array();
        foreach ($this->curso->getAll() as $curso) {
            $alunos = array();
            foreach($this->repo->getAlunosByCurso($curso->idcurso) as $aluno){
                $alunos[] = [
                    'id' => $aluno->idaluno,
                    'nome' => $aluno->nome.' '.$aluno->sobrenome,
                ];
            }
            $cursosAlunos[] = [
                'id' => $curso->idcurso,
                'nome' => $curso->nome,
                'alunos' => $alunos,
            ];
        }
        return $cursosAlunos;
    }
    public function validateAlunoCurso($aluno, $curso)
    {
        return $this->repo->validateCursoAluno($aluno, $curso);
    }
}

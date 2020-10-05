<?php

namespace App\Business;

use App\Repository\AlunoRepository;

ini_set('max_execution_time', 600);

class AlunoBusiness{

    private $repo;

    function __construct() {
        $this->repo = new AlunoRepository();
    }

    public function getAlunos()
    {
        $alunosRaw = $this->repo->getAll();
        $alunos = array();
        foreach($alunosRaw as $aluno){
            $alunos[] = [
                'id' => $aluno->idaluno,
                'nome' => $aluno->nome.' '.$aluno->sobrenome,
            ];
        }
        return $alunos;
    }

    public function getAluno($idaluno)
    {
        $aluno = $this->repo->get($idaluno);
        return ['id' => $aluno->idaluno, 'nome' => $aluno->nome.' '.$aluno->sobrenome];
    }
}

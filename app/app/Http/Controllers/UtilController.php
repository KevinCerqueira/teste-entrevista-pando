<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Business\AlunoBusiness;
use App\Business\CursoBusiness;
use App\Business\CursoAlunoBusiness;

class UtilController extends Controller
{
    private $alunos;
    private $cursos;

    function __construct() {
        $this->alunos = new AlunoBusiness();
        $this->cursos = new CursoBusiness();
        $this->cursosAlunos = new CursoAlunoBusiness();

    }
    public function gerarCertificado(Request $request)
    {
        $aluno = $this->alunos->getAluno(intval($request->idaluno));
        $curso = $this->cursos->getCurso(intval($request->idcurso));
        if(!$this->cursosAlunos->validateAlunoCurso($aluno['id'], $curso['id'])){
            return redirect()->back()->with('error', 'Este aluno não pertence a este curso.');
        }
        return view('certificado', ['curso' => $curso, 'aluno' => $aluno]);
    }
}

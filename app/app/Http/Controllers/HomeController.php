<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Business\AlunoBusiness;
use App\Business\CursoBusiness;
use App\Business\CursoAlunoBusiness;

class HomeController extends Controller
{
    private $alunos;
    private $cursos;
    private $cursosAlunos;

    function __construct() {
        $this->alunos = new AlunoBusiness();
        $this->cursos = new CursoBusiness();
        $this->cursosAlunos = new CursoAlunoBusiness();
    }

    public function index()
    {
        $varibles = [
            'alunos' => $this->alunos->getAlunos(),
            'cursos' => $this->cursos->getCursos(),
            'alunosIntoCurso' => $this->cursosAlunos->getAlunosIntoCurso(),
        ];
        return view('home', $varibles);
    }
}

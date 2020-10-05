@extends('layouts._includes.default')
@section('css')
@parent
<link href="/css/home.css" rel="stylesheet">
@endsection

@section('title', 'Home | Pando Test')

@section('body')
<div class="container p-5 text-center">

    <div id="top" class="p-3 border p-3 mb-4">
        <p class="h1 font-weight-bold text-white">
            Bem vindo!
            <i class="fa fa-smile-o" aria-hidden="true"></i>
        </p>
    </div>

    <fieldset id="menu" class="p-3 border mb-4">
        <legend class="h4 font-weight-light text-white">O que você deseja?</legend>
        <a class="h3 p-2 btn-block rounded font-weight-light text-white a-menu" data-toggle="modal"
            data-target="#relacaoAlunos">
            Relação de alunos
        </a>

        <a class="h3 p-2 btn-block rounded font-weight-light text-white a-menu" data-toggle="modal"
            data-target="#relacaoCursos">
            Relação de cursos
        </a>
        <a class="h3 p-2 btn-block rounded font-weight-light text-white a-menu" data-toggle="modal"
            data-target="#gerarCertificado">
            Gerar certificado
        </a>
    </fieldset>

    <div id="modals">

        <!-- Modal: Relação Alunos-->
        <div class="modal fade" id="relacaoAlunos" tabindex="-1" aria-labelledby="relacaoAlunosLabel"
            aria-hidden="true">
            <div class="modal-dialog mt-5 modal-dialog-scrollable modal-md">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title" id="relacaoAlunosLabel">Relação de Alunos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body bg-secondary">
                        <ul class="list-group">
                            @foreach ($alunos as $aluno)
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-1">
                                        <p class="h3 text-center">
                                            {{$aluno['id']}}
                                        </p>
                                    </div>
                                    <div class="col-md-11">
                                        <p class="h3 float-left font-weight-light">
                                            {{$aluno['nome']}}
                                        </p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal: Relação Cursos-->
        <div class="modal fade" id="relacaoCursos" tabindex="-1" aria-labelledby="relacaoCursosLabel"
            aria-hidden="true">
            <div class="modal-dialog mt-5 modal-dialog-scrollable modal-xl">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title" id="relacaoCursosLabel">Relação de Cursos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body bg-secondary">
                        <ul class="list-group">
                            @foreach ($cursos as $curso)
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-1">
                                        <p class="h3 text-center">
                                            {{$curso['id']}}
                                        </p>
                                    </div>
                                    <div class="col-md-11">
                                        <p class="float-left font-weight-light">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <a class="h3 text-dark font-weight-light" data-toggle="collapse"
                                                    href="#descricaoCurso{{$curso['id']}}" role="button"
                                                    aria-expanded="false"
                                                    aria-controls="descricaoCurso{{$curso['id']}}">
                                                    {{$curso['nome']}}
                                                </a>
                                                </div>
                                                <div class="col-md-2 h3">
                                                    {{$curso['cargahoraria']}}hr
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="collapse" id="descricaoCurso{{$curso['id']}}">
                                                    <div class="card card-body h5 font-weight-light">
                                                        {{$curso['descricao']}}
                                                    </div>
                                                </div>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal: Gerar Certificado-->
        <div class="modal fade" id="gerarCertificado" tabindex="-1" aria-labelledby="gerarCertificadoLabel"
            aria-hidden="true">
            <div class="modal-dialog mt-5 modal-dialog-scrollable modal-xl">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title" id="gerarCertificadoLabel">Selecione o Cursos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body bg-secondary">
                        <ul class="list-group">
                            @foreach ($alunosIntoCurso as $curso)
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-1">
                                        <p class="h3 text-center">
                                            {{$curso['id']}}
                                        </p>
                                    </div>
                                    <div class="col-md-11">
                                        <p class="float-left font-weight-light">
                                            <div class="row">
                                                <a class="h3 text-dark font-weight-light" data-toggle="collapse"
                                                    href="#descricaoCurso{{$curso['id']}}" role="button"
                                                    aria-expanded="false"
                                                    aria-controls="descricaoCurso{{$curso['id']}}">
                                                    {{$curso['nome']}}
                                                </a>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="collapse" id="descricaoCurso{{$curso['id']}}">
                                                        <div class="card card-body h5 font-weight-light">
                                                            @foreach ($curso['alunos'] as $key => $aluno)
                                                            <div class="row border p-2 mb-1 bg-secondary rounded text-white">
                                                                <div class="col-md-1 h3">
                                                                    {{$key + 1}}
                                                                </div>
                                                                <div class="col-md-7 h3 font-weight-light">
                                                                    {{$aluno['nome']}}
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <a target="_blank" href="{{ route('gerarCertificado', ['idaluno'=> $aluno['id'], 'idcurso' => $curso['id']]) }}"
                                                                        class="btn btn-light">
                                                                            Gerar Certificado
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <fieldset class="border text-white p-2">
        <legend class="h4 font-weight-light text-white">Repositório</legend>
        <p class="h4 horizontal font-weight-light">
            <a target="_blank" class="links rounded p-1" href="https://github.com/KevinCerqueira/teste-entrevista-pando">
                github.com/KevinCerqueira/teste-entrevista-pando</a>
        </p>
    </fieldset>
    <footer class="border ">
        <p class="text-white horizontal h5 p-2 font-weight-light">
            Developed by
            <a class="links rounded p-1" target="_blank" href="http://kevincerqueira.github.io">Kevin Cerqueira</a>
        </p>
    </footer>

</div>
@endsection

@section('js')
@parent
<script src="/js/home.js"></script>
@endsection

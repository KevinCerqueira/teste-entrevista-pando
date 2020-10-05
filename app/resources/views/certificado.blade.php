@extends('layouts._includes.default')
@section('css')
    @parent
    <link rel="stylesheet" href="css/certificado.css" />
@endsection

@section('title', 'Certificado')

@section('body')
    <img class="pos-abs" id="img-top" src="img/ri_1.png" />
    <div class="pos-abs" style="top:3.71in;left:6.58in;width:3.98in;line-height:0.42in;">
        <span class="font-d h1 text-uppercase">
            {{$aluno['nome']}}
        </span>
    </div>
    <div class="pos-abs" style="top:4.65in;left:10.19in;width:1.90in;line-height:0.21in;">
        <span class="font-d font-size-12">
            CONCLUIU O CURSO
        </span>
    </div>
    <div class="pos-abs" style="top:5.07in;left:8.18in;width:3.58in;line-height:0.25in;">
        <span class="font-d font-weight-bold font-size-14">
            {{$curso['nome']}}
        </span>
    </div>
    <div class="pos-abs" style="top:5.51in;left:9.35in;width:2.64in;line-height:0.21in;">
        <span class="font-d font-size-12">
            COM CARGA HORÁRIA DE {{$curso['cargahoraria']}}H
        </span>
    </div>
    <div class="pos-abs" style="top:5.94in;left:9.92in;width:2.10in;line-height:0.21in;">
        <span class="font-d font-size-12">
            NA DATA DE {{date('m/d/Y')}}
        </span>
    </div>
@endsection
@section('js')
    @parent
    <script>
        window.print();
    </script>
@endsection

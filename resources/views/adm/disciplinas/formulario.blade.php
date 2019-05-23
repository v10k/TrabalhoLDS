@extends('layout.site')

@section('titulo', 'Formulario disciplinas')

@section('conteudo')

@php
$disciplinas_siglas = array("ADS", "MAT", "TAI", "GSI", "ECA", "TecII", "TecAI", "TecMS");
$carga_horaria = array("1 AULA", "2 AULAS", "3 AULAS", "4 AULAS", "5 AULAS", "6 AULAS");
$disciplinas_texto = array
("Tecnologia em Análise e Desenvolvimento de Sistemas",
"Licenciatura em Matemática",
"Tecnologia em Automação Industrial",
"Pós-Graduação em Gestão de Sistemas de Informação",
"Engenharia de Controle e Automação",
"Técnico em Informática para Internet",
"Técnico em Automação Industrial",
"Técnico em Manutenção e Suporte em Informática")
@endphp

<link href="{{asset('css/usuario.css')}}" rel="stylesheet" />
    </head>
    <body class="fundo">
        <div>
            <div class="panel panel-dark panel-flat">
                <div class="panel-body">
                <p class="text-center pv">Cadastro de Disciplinas</p>
                <form method="POST" action="{{ $caminho }}">
                        {{ csrf_field() }}
                        <div class="form-group has-feedback">
                            <p class="title"> Nome da disciplina:</p>
                            <input id="nome" name="nome_disciplina" autofocus type="text" placeholder="Nome da disciplina" required
                                value="{{ isset($disciplinas->nome_disciplina)  ? $disciplinas->nome_disciplina  : '' }}"
                                class="form-control {{ $errors->has('nome_disciplina') ? 'is-invalid' : '' }}">
                                @if($errors->has('nome_disciplina'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('nome_disciplina') }}
                                    </div>
                                @endif
                        </div>
                        <div class="form-group has-feedback">
                            <p class="title"> Curso pertecente:</p>
                            <select name="curso_disciplina">
                                @for($i = 0; $i < sizeof($disciplinas_siglas); $i++)
                                <option value="{{$disciplinas_siglas[$i]}}" 
                                @php 
                                    if (isset($disciplinas->curso_disciplina)) 
                                        echo ($disciplinas->curso_disciplina == $disciplinas_siglas[$i]) ? 'selected' : '';
                                @endphp>{{$disciplinas_texto[$i]}}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="form-group has-feedback">
                            <p class="title"> Carga horária:</p>
                            <select name="carga_horaria">
                            @for($i = 0; $i < sizeof($carga_horaria); $i++)
                                <option value="{{$i+1}}" 
                                @php 
                                    if(isset($disciplinas->carga_horaria))
                                    echo ($disciplinas->carga_horaria == $i+1) ? 'selected' : '';
                                @endphp>{{ $carga_horaria[$i] }}</option>    
                            @endfor
                            </select>

                        </div>
                        <br>
    <button type="submit" value="salvar"> Salvar </button>
    </form>
@endsection
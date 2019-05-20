@extends('layout.site')

@section('titulo', 'Login')

@section('conteudo')
<link href="{{asset('css/usuario.css')}}" rel="stylesheet" />
    </head>
    <body class="fundo">
        <div>
            <div class="panel panel-dark panel-flat">
                <div class="panel-body">
                    <p class="text-center pv">Login</p>
                    <form method="POST" action="{{ $caminho }}">
                        {{ csrf_field() }}
                        @if(isset($message))
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                        @endif
                        <div class="form-group has-feedback">
                            <p class="title"> Prontuário:</p>
                            <input id="gu" name="prontuario" type="text" placeholder="GU0000000" required
                                value="{{ isset($servidores->prontuario)  ? $servidores->prontuario  : '' }}"
                                class="form-control {{ $errors->has('prontuario') ? 'is-invalid' : '' }}">
                                @if($errors->has('prontuario'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('prontuario') }}
                                    </div>
                                @endif
                            <div class="form-group has-feedback">
                            <p class="title">Senha:</p>
                            <input id="senha" name="senha" type="password" placeholder="Senha" required
                                value="{{ isset($servidores->senha)  ? $servidores->senha  : '' }}"
                                class="form-control {{ $errors->has('senha') ? 'is-invalid' : '' }}">
                                @if($errors->has('senha'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('senha') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <button type="submit" class="btn btn-block btn-primary mt-lg btn-lg">Confirmar</button>
                    </form>
                </div>
            </div>
        </div>
@endsection
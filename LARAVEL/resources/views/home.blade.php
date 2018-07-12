@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Painel de controle</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-12" align="center">
                            <a href="{{ url('/bots') }}" class="btn btn-success btn-lg btn-block">Gerenciar Bots</a>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4" align="center">
                            <a href="{{ url('/exams') }}" class="btn btn-danger btn-lg btn-block">Gerenciar Provas</a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ url('/resources') }}" class="btn btn-primary btn-lg btn-block">Gerenciar Materiais</a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ url('/questions') }}" class="btn btn-warning btn-lg btn-block">Gerenciar Questões</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

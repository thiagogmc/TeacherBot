@extends('adminlte::page')

@section('content')
<div class="row">
    <section class="content-header">
        <h1>
            Usuários
            <small>Editar</small>
        </h1>
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
    </section>
    <br>
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Editar dados do usuário</h3>
                <div class="box-tools pull-right">
                    <a href="{{ url('/users') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
                </div>
            </div>
            <div class="box-body">
                <form method="POST" action="{{ url('/users') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    @include ('users.form')

                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
@extends('adminlte::page')

@section('content')
    <div class="row">
        <section class="content-header pull-left">
            <h1>
                Bot
                <small>Dados</small>
            </h1>
        </section>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Dados do Bot</h3>
                    <div class="box-tools pull-right">
                        <a href="{{ url('/bots') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
                        <a href="{{ url('/bots/' . $bot->id . '/edit') }}" title="Editar Bot"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                        <form method="POST" action="{{ url('bots' . '/' . $bot->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Excluir Bot" onclick="return confirm(&quot;Tem certeza de que deseja exluir o Bot?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Excluir</button>
                        </form>

                    </div>
                </div>
                <div class="box-body">

                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $bot->id }}</td>
                                    </tr>
                                    <tr><th> Nome </th><td> {{ $bot->name }} </td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('admin.sidebar')
            </div>

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header" align="center"><h2>Meus Bots</h2></div>
                    <div class="card-body">
                        <a href="{{ url('/bots/create') }}" class="btn btn-success btn-sm" title="Novo Bot">
                            <i class="fa fa-plus" aria-hidden="true"></i> Novo Bot
                        </a>
                        <div class="pull-right" style="white-space:nowrap">
                            <form method="GET" action="{{ url('/bots') }}" accept-charset="UTF-8" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="search" placeholder="Pesquisar..." value="{{ request('search') }}">
                                    <span class="input-group-append">
                                        <button class="btn btn-secondary" type="submit">
                                            Pesquisar
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($bots as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            <a href="{{ url('/bots/' . $item->id) }}" title="Ver Bot"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/bots/' . $item->id . '/edit') }}" title="Editar Bot"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                            <form method="POST" action="{{ url('/bots' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Apagar Bot" onclick="return confirm(&quot;Deseja apagar?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Apagar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $bots->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

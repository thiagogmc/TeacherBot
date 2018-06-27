@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('admin.sidebar')
            </div>

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Questão: {{ $question->name }}</div>
                    <div class="card-body">

                        <a href="{{ url('/questions') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
                        <a href="{{ url('/questions/' . $question->id . '/edit') }}" title="Editar Questão"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('questions' . '/' . $question->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Apagar Questão" onclick="return confirm(&quot;Deseja apagar?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Apagar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $question->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Nome </th><td> {{ $question->name }} </td>
                                    </tr>
                                    <tr>
                                        <th> Bot </th><td> {{ $question->bot->name }} </td>
                                    </tr>
                                    <tr>
                                        <th> Assunto </th><td> {{ $question->subject }} </td>
                                    </tr>
                                    <tr>
                                        <th> Enunciado </th><td> {{ $question->statement }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

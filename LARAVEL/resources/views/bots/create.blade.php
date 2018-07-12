@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('admin.sidebar')
            </div>

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header" align="center"><h2>Cadastrar Bot</h2></div>
                    <div class="card-body">
                        <a href="{{ url('/bots') }}" title="Voltar"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        @if (session('error'))
                            <ul class="alert alert-danger">
                                    <li>{{ session('error')}}</li>
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/bots') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('bots.form')

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

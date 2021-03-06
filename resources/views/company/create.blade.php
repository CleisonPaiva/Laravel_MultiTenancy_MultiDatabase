@extends('adminlte::page')

@section('title', 'Companies Create')

@section('content_header')
    <h1>Companies Create</h1>
@stop

@section('content')
    <a id="" href="{{ route('company.index') }}" class="btn btn-outline-dark mt-1">
        <i class="fas fa-arrow-left"></i> <span class="button-text">Voltar</span>
    </a>
    <button id="btn_submit" type="submit" form="form-new-company" class="btn btn-primary mt-1">
        <i class="fas fa-save"></i> <span class="button-text">Salvar</span>
    </button>

    <div class="card shadow">
        <div class="card-body">
            <form id="form-new-company" class="form-horizontal" method="POST" action="{{ route('company.index') }}">
                @csrf
                @include('company.fields')
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script> console.log('Hi!'); </script>
@stop


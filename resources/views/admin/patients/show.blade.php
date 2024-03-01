@extends('layouts.master')

@section('title')
    Visualizar
@endsection

@section('title2')
    Visualizar
@endsection

@section('content')
        @include('admin.patients.form', ['view' => 'readonly' ,'botao' =>
         '<a class="btn btn-secondary" href="/pacientes">Voltar</a>'])
@endsection
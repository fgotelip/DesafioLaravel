@extends('layouts.master')

@section('title')
    Informações
@endsection

@section('title2')
    Informações
@endsection

@section('content')
        @include('admin.patients.form', ['view' => 'readonly' ,'botao' =>
         '<a class="btn btn-secondary" href="/pacientes">Voltar</a>'])
@endsection
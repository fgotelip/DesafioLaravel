@extends('layouts.master')

@section('title')
    Visualizar
@endsection

@section('title2')
    Visualizar
@endsection

@section('content')
        @include('admin.doctors.form', ['view' => 'readonly' ,'botao' =>
         '<a class="btn btn-secondary" href="/medicos">Voltar</a>'])
@endsection
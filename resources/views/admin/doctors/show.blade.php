@extends('layouts.master')

@section('title')
    Informações
@endsection

@section('title2')
    Informações
@endsection

@section('content')
        @include('admin.doctors.form', ['view' => 'readonly' ,'botao' =>
         '<a class="btn btn-secondary" href="/medicos">Voltar</a>'])
@endsection
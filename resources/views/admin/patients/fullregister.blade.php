@extends('layouts.master')

@section('title')
    Completar Cadastro
@endsection

@section('title2')
    Completar Cadastro
@endsection

@section('content')
    <form name="formEdit" id="formEdit" method="post" action="{{url("pacientes/$patient->id")}}"
    enctype="multipart/form-data">
        @method('PUT')
        @csrf
        @include('admin.patients.form', [ 'botao' => '<input class="btn btn-primary mt-5"
         type="submit" value="Cadastrar">','botao2' => '<a class="btn btn-secondary mt-5" 
         href="/">Voltar</a>', 'full' => '<!--'])
    </form>
@endsection
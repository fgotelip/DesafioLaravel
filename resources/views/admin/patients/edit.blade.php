@extends('layouts.master')

@section('title')
    Atualizar
@endsection

@section('title2')
    Atualizar
@endsection

@section('content')
    <form name="formEdit" id="formEdit" method="post" action="{{url("pacientes/$patient->id")}}"
    enctype="multipart/form-data">
        @method('PUT')
        @csrf
        @include('admin.patients.form', ['botao' => '<input class="btn btn-primary"
         type="submit" value="Editar">','botao2' => '<a class="btn btn-secondary" 
         href="/pacientes">Voltar</a>'])
    </form>
@endsection
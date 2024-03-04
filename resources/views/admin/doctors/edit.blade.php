@extends('layouts.master')

@section('title')
    Atualizar Dados
@endsection

@section('title2')
    Atualizar Dados
@endsection

@section('content')
    <form name="formEdit" id="formEdit" method="post" action="{{url("medicos/$doctor->id")}}"
    enctype="multipart/form-data">
        @method('PUT')
        @csrf
        @include('admin.doctors.form', ['botao' => '<input class="btn btn-primary"
         type="submit" value="Editar">','botao2' => '<a class="btn btn-secondary" 
         href="/medicos">Voltar</a>'])
    </form>
@endsection
@extends('layouts.master')

@section('title')
    Completar Cadastro
@endsection

@section('title2')
    Completar Cadastro
@endsection

@section('content')
    <form name="formEdit" id="formEdit" method="post" action="{{route('patient.update', Auth::guard('patient')->user()->id)}}"
    enctype="multipart/form-data">
        @method('PUT')
        @csrf
        @include('admin.patients.formprofile', [ 'botao' => '<input class="btn btn-primary mt-5"
         type="submit" value="Cadastrar">','botao2' => '<a class="btn btn-secondary mt-5" 
         href="/">Voltar</a>', 'full' => 'hidden'])
    </form>
@endsection
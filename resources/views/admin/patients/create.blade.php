@extends('layouts.master')

@section('title')
    Cadastrar
@endsection

@section('title2')
    Cadastrar
@endsection

@section('content')
    <form name="formCad" id="formCad" method="post" action="{{url('/pacientes')}}">
        @csrf
        @include('admin.patients.form', ['botao' => '<input class="btn btn-primary"
         type="submit" value="Cadastrar">','botao2' => '<a class="btn btn-secondary" 
         href="/pacientes">Voltar</a>'])
    </form>
@endsection

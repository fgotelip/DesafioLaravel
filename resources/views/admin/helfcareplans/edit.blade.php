@extends('layouts.master')

@section('title')
    Atualizar Dados
@endsection

@section('title2')
    Atualizar Dados
@endsection

@section('content')
    <form name="formEdit" id="formEdit" method="post" 
    action="{{url("planosdesaude/$helfcareplan->id")}}">
        @method('PUT')
        @csrf
        @include('admin.helfcareplans.form', ['botao' => '<input class="btn btn-primary"
         type="submit" value="Editar">','botao2' => '<a class="btn btn-secondary" 
         href="/planosdesaude">Voltar</a>'])
    </form>
@endsection
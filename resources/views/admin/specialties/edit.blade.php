@extends('layouts.master')

@section('title')
    Atualizar Dados
@endsection

@section('title2')
    Atualizar Dados
@endsection

@section('content')
    <form name="formEdit" id="formEdit" method="post" action="{{url("especialidades/$specialty->id")}}">
        @method('PUT')
        @csrf
        @include('admin.specialties.form', ['botao' => '<input class="btn btn-primary"
         type="submit" value="Editar">','botao2' => '<a class="btn btn-secondary" 
         href="/especialidades">Voltar</a>'])
    </form>
@endsection
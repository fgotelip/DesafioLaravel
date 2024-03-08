@extends('layouts.master')

@section('title')
    Informações
@endsection

@section('title2')
    Informações
@endsection

@section('content')
        @include('admin.surgicalprocedures.form', ['view' => 'readonly' ,'botao' =>
         '<a class="btn btn-secondary" href="/procedimentocirugico">Voltar</a>', 'view1' => 'hidden'])
@endsection
